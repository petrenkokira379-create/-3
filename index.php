<?php
  $appName = "Task Manager";
  $taskTitle = "Вивчити основи PHP";
  $taskTimeEstimate = 2;
  $isCompleted = false; // Логічна змінна стану (true — виконано, false — в процесі)
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .task-done { color: #2e7d32; text-decoration: line-through; }
        .task-pending { color: #d32f2f; font-weight: bold; }
    </style>
</head>
<body>
    <header>
        <h1><?= $appName ?></h1>
    </header>
    <main>
        <h2>Список завдань</h2>
        <ul>
            <li class="<?= $isCompleted ? 'task-done' : 'task-pending' ?>">
                <strong>Завдання:</strong> <?= $taskTitle ?> 
                (Очікуваний час: <?= $taskTimeEstimate ?> год.) — 
                <?php if ($isCompleted): ?>
                    <span>✔️ Виконано</span>
                <?php else: ?>
                    <span>🕒 В процесі</span>
                <?php endif; ?>
            </li>
        </ul>
    </main>
</body>
</html>