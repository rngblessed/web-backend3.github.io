<?PHP

$user = 'admin';
$pass = 'smpP4ssw0rd!';
$global = new PDO(
    'mysql:host=localhost;dbname=admin',
    $user,
    $pass,
    [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

try {
    $login = $_POST['login'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $date = date_diff(date_create($date), date_create('today'))->y;
    if (!preg_match('/^[А-ЯЁёа-я\s]+$/u', $login)) {
        echo " <p style='color: red;'>Ошибка: поле login должно содержать только русские буквы</p>";
        $login = '';
    }
    if (substr($tel, 0, 2) !== '+7') {
        echo " <p style='color: red;'>Ошибка: номер телефона должен начинаться с +7</p>";
        $tel = '';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color: red;'>Ошибка: неправильный формат email</p>";
        $email = '';
    }
    if ($date < 18) {
        echo "<p style='color: red;'>Ошибка: пользователь должен быть совершеннолетним</p>";
    } else {
        $stmt = $global->prepare("INSERT INTO main (Name, phone,email,birth_date,gender,Biographi,contract_agreed) VALUES (:Name, :phone,:email,:birth_date,:gender,:Biographi,:contract_agreed)");
        $login = $_POST['login'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $date = $_POST['date'];
        $someGroupName = $_POST['someGroupName'];
        $bio = $_POST['bio'];
        $checkt = $_POST['checkt'];
        $stmt->bindParam(':Name', $login);
        $stmt->bindParam(':phone', $tel);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':birth_date', $date);
        $stmt->bindParam(':gender', $someGroupName);
        $stmt->bindParam(':Biographi', $bio);
        $stmt->bindParam(':contract_agreed', $checkt);
        $stmt->execute();


        $user_id = $global->lastInsertId();
        $Languages = $_POST['language'];
        foreach ($Languages as $language_name) {
            $stmt = $global->prepare("INSERT INTO user_languages (user_id, language_name) VALUES (:user_id,:language_name)");
            $stmt->bindParam(':user_id', $user_id);
            $stmt->bindParam(':language_name', $language_name);
            $stmt->execute();
        }
        echo "<h5 style='color: green;'>Форма успешно сохранена</h5>";
    }
} catch (PDOException $e) {
    print ('Error : ' . $e->getMessage());
    exit();
}
?>
