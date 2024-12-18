<?php

if (isset($_POST['submit_form'])) {
    global $wpdb;

    // Очищаем данные
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);
    $date = sanitize_text_field($_POST['date']);

    // Имя таблицы
    $table_name = $wpdb->prefix . 'custom_form_submissions';

    // SQL-запрос для вставки данных
    $wpdb->insert(
        $table_name,
        array(
            'name' => $name,
            'email' => $email,
            'date' => $date,
            'message' => $message,
        )
    );

    // Проверяем, успешно ли сохранено
    if ($wpdb->insert_id) {
        // Устанавливаем параметр для отображения сообщения
        $redirect_url = home_url('/пригласить-на-мероприятие/');
        $redirect_url = add_query_arg('success', '1', $redirect_url);

        // Выполняем редирект
        wp_redirect($redirect_url);
        exit;
    } else {
        echo '<p class="error-message">Произошла ошибка. Пожалуйста, попробуйте снова.</p>';
    }
}
