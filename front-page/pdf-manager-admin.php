<?php
/**
 * PDF Manager for Front Page Settings
 */

function tfs_pdf_manager_ajax_upload() {
    check_ajax_referer('tfs_pdf_manager_nonce', 'nonce');

    if (!current_user_can('manage_options')) {
        wp_send_json_error('Permission denied');
    }

    if (!isset($_FILES['pdf_file'])) {
        wp_send_json_error('No file uploaded');
    }

    $file = $_FILES['pdf_file'];
    $file_name = sanitize_file_name($file['name']);
    $target_dir = ABSPATH . 'pdf/';

    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0755, true);
    }

    $target_path = $target_dir . $file_name;

    if (move_uploaded_file($file['tmp_name'], $target_path)) {
        wp_send_json_success('File uploaded successfully');
    } else {
        wp_send_json_error('Failed to move uploaded file');
    }
}
add_action('wp_ajax_tfs_pdf_manager_upload', 'tfs_pdf_manager_ajax_upload');

function tfs_pdf_manager_ajax_delete() {
    check_ajax_referer('tfs_pdf_manager_nonce', 'nonce');

    if (!current_user_can('manage_options')) {
        wp_send_json_error('Permission denied');
    }

    $filename = isset($_POST['filename']) ? sanitize_file_name($_POST['filename']) : '';

    if (empty($filename)) {
        wp_send_json_error('No filename provided');
    }

    $file_path = ABSPATH . 'pdf/' . $filename;

    if (file_exists($file_path)) {
        if (unlink($file_path)) {
            wp_send_json_success('File deleted successfully');
        } else {
            wp_send_json_error('Failed to delete file');
        }
    } else {
        wp_send_json_error('File not found');
    }
}
add_action('wp_ajax_tfs_pdf_manager_delete', 'tfs_pdf_manager_ajax_delete');

function tfs_get_pdf_files() {
    $pdf_dir = ABSPATH . 'pdf/';
    $files = [];

    if (file_exists($pdf_dir) && is_dir($pdf_dir) && is_readable($pdf_dir)) {
        $dir_files = scandir($pdf_dir);
        
        if (is_array($dir_files)) {
            foreach ($dir_files as $file) {
                if ($file === '.' || $file === '..') {
                    continue;
                }

                $file_path = $pdf_dir . $file;
                
                if (!is_file($file_path)) {
                    continue;
                }

                $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if ($extension === 'pdf') {
                    $size = @filesize($file_path);
                    $mtime = @filemtime($file_path);

                    $files[] = [
                        'name' => $file,
                        'url' => home_url('/pdf/' . $file),
                        'size' => $size ? size_format($size) : 'Unknown',
                        'date' => $mtime ? date('Y-m-d H:i:s', $mtime) : 'Unknown'
                    ];
                }
            }
        }
    }
    
    // Sort by date descending
    if (!empty($files)) {
        usort($files, function($a, $b) {
            return strcmp($b['date'], $a['date']);
        });
    }

    return $files;
}
