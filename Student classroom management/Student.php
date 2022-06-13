<?php
error_reporting(E_ERROR | E_PARSE);

class Student extends Person
{

    private array $classes = [];

    /**
     * return array of classes
     *
     * @return array
     */
    public function classList(): array
    {
        return $this->classes;
    }

    /**
     * add $classItem to list student class, if not exist
     *
     * @param ClassItem $classItem
     * @return $this
     */
    public function addClass(ClassItem $classItem): Student
    {
        $this->classes[] = $classItem;
        return $this;
    }

    /**
     * return true if student has this class else return false
     *
     * @param ClassItem $classItem
     * @return bool
     */
    public function isStudentHasClass(ClassItem $classItem): bool
    {
        foreach ($this->classList() as $item) {
            if ($item->getId() == $classItem->getId())
                return true;
        }
        return false;
    }

    /**
     * @param ClassItem $classItem
     * @return string
     */
    public function removeClass(ClassItem $classItem): void // : string
    {
        $id = $classItem->getId() - 1;
        unset($this->classes[$id]);
    }
}