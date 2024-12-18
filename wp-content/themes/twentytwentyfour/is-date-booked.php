<?php
//получаем дату из запроса
if (isset($_GET['date'])) {
    $date = sanitize_text_field($_GET['date']);

    // Проверяем, занята ли дата
    $booked = is_date_booked($date);

    // Возвращаем результат в формате JSON
    echo json_encode(['booked' => $booked]);
    exit;
}

// Функция для проверки занятости даты
function is_date_booked($date) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'custom_form_submissions'; // Замените на имя вашей таблицы
    $query = $wpdb->prepare("SELECT COUNT(*) FROM $table_name WHERE date = %s", $date);
    $count = $wpdb->get_var($query);
    return $count > 0;
}