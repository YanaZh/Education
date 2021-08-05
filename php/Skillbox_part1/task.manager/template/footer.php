</td>
<td class="right-collum-index">

    <div class="project-folders-menu">
        <ul class="project-folders-v">
            <?php if (isset($_SESSION['auth']) && $_SESSION['auth']) { ?>
                <li class="project-folders-v-active"><a href="/?login=no">Выйти</a></li>
            <?php } else { ?>
                <li class="project-folders-v-active"><a href="/?login=yes">Авторизация</a></li>
                <li><a href="#">Регистрация</a></li>
                <li><a href="#">Забыли пароль?</a></li>
            <?php } ?>

        </ul>
        <div class="clearfix"></div>
    </div>
    <?php if (isset($_GET['login']) && $_GET['login'] === 'yes') : ?>
        <?php if (!empty($_POST) && !$_SESSION['auth']): ?>
            <?php require($_SERVER['DOCUMENT_ROOT'] . '/include/error.php'); ?>
        <?php endif ?>
        <?php if (!$_SESSION['auth']) : ?>
            <div class="index-auth">
                <form action="/?login=yes" method="post">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <?php if ($loginOn) : ?>
                                <td class="iat">
                                    <label for="login_id">Ваш e-mail:</label>
                                    <input id="login_id" size="30" name="login"
                                           value="<?= htmlspecialchars($_POST['login'] ?? "") ?>">
                                </td>
                            <?php endif ?>
                        </tr>
                        <tr>
                            <td class="iat">
                                <label for="password_id">Ваш пароль:</label>
                                <input id="password_id" size="30" name="password" type="password"
                                       value="<?= htmlspecialchars($_POST['password'] ?? "") ?>">
                            </td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="Войти"></td>
                        </tr>
                    </table>
                </form>
            </div>
        <?php elseif ($_SESSION['auth']): ?>
            <?php require($_SERVER['DOCUMENT_ROOT'] . '/include/success.php'); ?>
        <?php endif ?>
    <?php endif ?>
</td>
</tr>
</table>

<div class="clearfix">
    <?php helper\showMenu($mainMenu, "sortDesc", "main-menu bottom"); ?>
</div>

<div class="footer">&copy;&nbsp;<?= date('Y') ?>
    Project.
</div>
</body>
</html>
<?php closeConnection() ?>