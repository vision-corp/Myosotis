<?php


namespace model;


class calendar_model
{
    public static function load($pdo) {

        $stmt = $pdo->prepare("select * from events order by id");
        $stmt->execute();
        $result = $stmt->fetchAll();

        foreach($result as $row)
        {
            $data[] = array(
                'id'   => $row["id"],
                'title'   => $row["title"],
                'start'   => $row["start_event"],
                'end'   => $row["end_event"]
            );
        }

        return json_encode($data);
    }

    public static function insert($pdo, $title, $start_event, $end_event) {
        $stmt = $pdo->prepare("INSERT INTO events (title, start_event, end_event) VALUES (?, ?, ?)");
        $stmt->execute([$title, $start_event, $end_event]);

    }

    public static function update($pdo, $id, $title, $start_event, $end_event)
    {
        $stmt = $pdo->prepare("UPDATE events SET title=?, start_event=?, end_event=? WHERE id=?");
        $stmt->execute([$title, $start_event, $end_event, $id]);
    }

    public static function delete($pdo, $id)
    {
        $stmt = $pdo->prepare("DELETE from events WHERE id=?");
        $stmt->execute([$id]);
    }
}