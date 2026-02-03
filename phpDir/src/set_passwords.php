<?php
$host = 'db';
$dbname = 'lionDB';
$user = 'lionUser';
$pass = 'lionPass';

$conn = new PDO(
  "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
  $user,
  $pass,
  [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

// id => пароль
$passwords = [
  1 => '1234',   // Maria
  2 => 'abcd',   // Leon
  3 => 'lion'    // Lion
];

$stmt = $conn->prepare(
  "UPDATE users SET password = :password WHERE id = :id"
);

foreach ($passwords as $id => $plainPassword) {
  $hash = password_hash($plainPassword, PASSWORD_DEFAULT);
  $stmt->execute([
    'password' => $hash,
    'id' => $id
  ]);
}

echo "Passwords set for 3 users.";
?>