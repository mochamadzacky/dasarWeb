<?php
include('../lib/session.php');
include('../lib/connection.php');
$session = new Session();

$act = isset($_GET['act']) ? strtolower($_GET['act']) : '';

if ($act == 'login') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Digunakan untuk query user
    $query = $db->prepare('SELECT * FROM m_user WHERE username = ?');
    $query->bind_param('s', $username);
    $query->execute();

    // Untuk ambil datanya
    $result = $query->get_result();
    $data = $result->fetch_assoc();

    // Jika password sesuai
    if ($data && password_verify($password, $data['password'])) {
        $session->set('is_login', true);
        $session->set('username', $data['username']);
        $session->set('name', $data['nama']);
        $session->set('level', $data['level']);
        $session->commit();

        header('Location: ../index.php');
        exit;
    } else {
        $session->setFlash('status', false);
        $session->setFlash('message', 'Username dan password salah.');
        $session->commit();

        header('Location: ../login.php');
        exit;
    }

} else if ($act == 'logout') {

    $session->deleteAll();

    header('Location: ../login.php');
    exit;
}
?>
