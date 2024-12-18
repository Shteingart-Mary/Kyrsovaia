<?php
if (isset($_GET['success']) && $_GET['success'] == '1') {
    echo '<div class="success-message">Спасибо! Ваше сообщение успешно отправлено.</div>';
} 
?>

<form action="/custom-form-action" method="POST" class="custom-form">
    <div class="form-group">
        <label for="name" class="form-label">Имя:</label>
        <input type="text" id="name" name="name" class="form-input" required>
    </div>

    <div class="form-group">
        <label for="email" class="form-label">Email:</label>
        <input type="email" id="email" name="email" class="form-input" required>
    </div>

    <div class="form-group">
        <label for="date" class="form-label">Дата:</label>
        <input type="date" id="date" name="date" class="form-input" required>
    </div>

    <div class="form-group">
        <label for="message" class="form-label">Сообщение:</label>
        <textarea id="message" name="message" class="form-textarea" required></textarea>
    </div>

    <div class="form-group">
        <input type="submit" name="submit_form" value="Отправить" class="form-submit">
    </div>
</form>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const dateInput = document.getElementById('date');

    dateInput.addEventListener('input', function() {
        const selectedDate = this.value;
        const today = new Date().toISOString().split('T')[0]; // Получаем текущую дату в формате YYYY-MM-DD

        // Проверяем, что выбранная дата не меньше текущей
        if (selectedDate <= today) {
            alert('Вы не можете выбрать прошедшую дату. Пожалуйста, выберите дату с текущего дня.');
            this.value = ''; // Очищаем поле, если выбрана прошедшая дата
            return; // Прерываем выполнение, чтобы не проверять дату на сервере
        }

        // Отправляем запрос на сервер, чтобы проверить, занята ли дата
        fetch('/is-date-booked/?date=' + selectedDate)
            .then(response => response.json())
            .then(data => {
                if (data.booked) {
                    alert('Эта дата уже занята. Пожалуйста, выберите другую.');
                    this.value = ''; // Очищаем поле, если дата занята
                }
            });
    });
});
</script>

<style>
.custom-form {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    /* height: 100vh;  Высота формы равна высоте окна просмотра */
}

.form-group {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

.form-label {
    color: black;
    margin-right: 10px;
    min-width: 100px; /* Фиксированная ширина для лейблов */
}

.form-input, .form-textarea, .form-submit {
    flex-grow: 1;
}

/* Сообщение об успехе */
.success-message {
    color: green;
    font-weight: bold;
    margin-bottom: 20px;
    display: flex;
    justify-content: center;
}

/* Сообщение об ошибке */
.error-message {
    color: red;
    font-weight: bold;
    margin-bottom: 20px;
}
</style>