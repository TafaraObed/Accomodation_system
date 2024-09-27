<?php
// BaseRepository.php

interface BaseRepository {
    public function fetchAll();
    public function fetchById($id);
    public function save($model);
    public function update($model, $id);
    public function delete($id);
}
?>
