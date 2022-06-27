<h2><?= esc($title) ?></h2>

<!--
    The session()->getFlashdata('error') function is used to report errors related to CSRF protection.
    The service('validation')->listErrors() function is used to report errors related to form validation.
-->
<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<form action="/ci4-board/news/create" method="post">
    <!--
        The csrf_field() function creates a hidden input with a CSRF token that helps protect against some common attacks.
        redirect 되는 경로는 App.php 에 $baseURL.$indexPage.현재 URL 이므로 변수값을 맞추어 조정해 주어야 합니다.
    -->
    <?= csrf_field() ?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="body">Text</label>
    <textarea name="body" cols="45" rows="4"></textarea><br />

    <input type="submit" name="submit" value="Create news item" />
</form>
