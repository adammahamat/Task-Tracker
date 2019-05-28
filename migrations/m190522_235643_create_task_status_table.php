<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%task_status}}`.
 */
class m190522_235643_create_task_status_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = '
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `task_status` (
  `id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `action_key` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `task_status` (`id`, `status`, `action_key`) VALUES
(1, \'Открыто\', \'open\'),
(2, \'В работе\', \'do\'),
(3, \'Выполнено\', \'success\'),
(4, \'Закрыто\', \'close\'),
(5, \'Завершено не успешно\', \'failed\'),
(6, \'Приостановлено\', \'pause\'),
(7, \'Отменено\', \'cancel\');

ALTER TABLE `task_status`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `task_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;
';
        $this->execute($sql);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $sql = '
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
            
DROP TABLE `task_status`;
            
COMMIT;
';
        $this->execute($sql);

        return false;
    }
}
