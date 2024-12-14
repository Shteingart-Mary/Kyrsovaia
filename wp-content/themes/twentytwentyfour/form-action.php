<!-- <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_form'])) {
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    // Пример: вывод данных (можно заменить на отправку email или сохранение в базу данных)
    echo "<h3>Данные формы:</h3>";
    echo "<p>Имя: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Сообщение: $message</p>";
}
?> -->

<?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_form'])) {
//     global $wpdb;

//     // Очищаем данные
//     $name = sanitize_text_field($_POST['name']);
//     $email = sanitize_email($_POST['email']);
//     $message = sanitize_textarea_field($_POST['message']);

//     // Имя таблицы
//     $table_name = $wpdb->prefix . 'custom_form_submissions';

//     // SQL-запрос для вставки данных
//     $wpdb->insert(
//         $table_name,
//         array(
//             'name' => $name,
//             'email' => $email,
//             'message' => $message,
//         )
//     );

//     // Проверяем, успешно ли сохранено
//     if ($wpdb->insert_id) {
//         echo '<p class="success-message">Спасибо! Ваше сообщение успешно отправлено.</p>';
//     } else {
//         echo '<p class="error-message">Произошла ошибка. Пожалуйста, попробуйте снова.</p>';
//     }
// }
echo 123;
?>