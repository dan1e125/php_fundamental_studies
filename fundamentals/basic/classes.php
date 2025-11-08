<?php
class Course
{
    public $title;
    public $description;
    public $subtitle;

    public function __construct($title, $subtitle, $description)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->description = $description;
    }
}

$course = new Course(
    'cybersecurity',
    'learn offensive and deffensive cyber skills',
    'penetration testing',

);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course->title?></title>
</head>
<body>
    <p><?= $course->description ?></p>
    <p><?= $course->subtitle ?></p>
    </body>
</html>
