<form action="form-action.php" method="post" class="custom-form">
    <div class="form-group">
        <label for="name" class="form-label">Имя:</label>
        <input type="text" id="name" name="name" class="form-input" required>
    </div>

    <div class="form-group">
        <label for="email" class="form-label">Email:</label>
        <input type="email" id="email" name="email" class="form-input" required>
    </div>

    <div class="form-group">
        <label for="message" class="form-label">Сообщение:</label>
        <textarea id="message" name="message" class="form-textarea" required></textarea>
    </div>

    <div class="form-group">
        <input type="submit" name="submit_form" value="Отправить" class="form-submit">
    </div>
</form>

<style>
.custom-form {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh; /* Высота формы равна высоте окна просмотра */
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
}

/* Сообщение об ошибке */
.error-message {
    color: red;
    font-weight: bold;
    margin-bottom: 20px;
}
</style>