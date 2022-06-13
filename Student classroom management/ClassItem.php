<?php

class ClassItem
{
    private int $id;
    private string $name;
    private string $description;
    private int $duration;
    private array $days;

    public function __construct($id, $name, $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        if ($this->getId() % 2 == 0) {
            $this->duration = 1;
        } else
            $this->duration = 2;
        $this->days = [];
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function getDays(): array
    {
        return $this->days;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

}
