<?php


class Checklist {

    private $name;
    private $tasks;
    private $public;
    private $id;

    /**
     * Checklist constructor.
     * @param $name
     * @param $tasks
     * @param $public
     * @param $id
     */
    public function __construct(String $name, ?array $tasks, int $public, String $id)
    {
        $this->name = $name;
        $this->tasks = ($tasks == null ? [] : $tasks);
        $this->public = ($public == 0 ? false : true);
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getID() : string {
        return $this->id;
    }


    /**
     * Return all tasks of the checklist
     * @return Task[]
     */
    public function getTasks() : array {
        return $this->tasks;
    }

    /**
     * Return checklist name
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * Return if checklist is public or not
     * @return bool true -> yes | false -> no
     */
    public function isPublic() : bool{
        return $this->public;
    }
}