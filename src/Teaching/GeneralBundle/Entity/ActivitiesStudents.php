<?php

namespace Teaching\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Teaching\GeneralBundle\Entity\Activities;
use Teaching\GeneralBundle\Entity\Students;

/**
 * ActivitiesStudents
 *
 * @ORM\Table(  name="activities_students",
 *              uniqueConstraints=
 *                  {@ORM\UniqueConstraint(
 *                      name="as_idx", 
 *                      columns={"activity_id", "student_id"}
 *                  )}
 * )
 * @ORM\Entity
 */
class ActivitiesStudents
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Activities")
     */
    private $activity;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="Students")
     */
    private $student;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="score", type="integer")
     */
    private $score;

    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=255, nullable=true)
     */
    private $file;

    /**
     * @var string
     *
     * @ORM\Column(name="observations", type="string", length=255)
     */
    private $observations;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return ActivitiesStudents
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set score
     *
     * @param integer $score
     * @return ActivitiesStudents
     */
    public function setScore($score)
    {
        $this->score = $score;
    
        return $this;
    }

    /**
     * Get score
     *
     * @return integer 
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set file
     *
     * @param string $file
     * @return ActivitiesStudents
     */
    public function setFile($file)
    {
        $this->file = $file;
    
        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set observations
     *
     * @param string $observations
     * @return ActivitiesStudents
     */
    public function setObservations($observations)
    {
        $this->observations = $observations;
    
        return $this;
    }

    /**
     * Get observations
     *
     * @return string 
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * Set activity
     *
     * @param string $activity
     * @return ActivitiesStudents
     */
    public function setActivity(Activities $activity)
    {
        $this->activity = $activity;
    
        return $this;
    }

    /**
     * Get activity
     *
     * @return string 
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Set student
     *
     * @param string $student
     * @return ActivitiesStudents
     */
    public function setStudent(Students $student)
    {
        $this->student = $student;
    
        return $this;
    }

    /**
     * Get student
     *
     * @return string 
     */
    public function getStudent()
    {
        return $this->student;
    }
}
