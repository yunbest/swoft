<?php
namespace App\Models\Entity;

use Swoft\Db\Model;
use Swoft\Db\Bean\Annotation\Column;
use Swoft\Db\Bean\Annotation\Entity;
use Swoft\Db\Bean\Annotation\Id;
use Swoft\Db\Bean\Annotation\Required;
use Swoft\Db\Bean\Annotation\Table;
use Swoft\Db\Types;

/**
 * @Entity()
 * @Table(name="mallbuilder_vote")
 * @uses      MallbuilderVote
 */
class MallbuilderVote extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $newsid 
     * @Column(name="newsid", type="smallint", default=0)
     */
    private $newsid;

    /**
     * @var string $title 
     * @Column(name="title", type="string", length=120)
     * @Required()
     */
    private $title;

    /**
     * @var string $votetext 
     * @Column(name="votetext", type="text", length=65535)
     * @Required()
     */
    private $votetext;

    /**
     * @var int $votetype 
     * @Column(name="votetype", type="tinyint", default=0)
     */
    private $votetype;

    /**
     * @var int $num 
     * @Column(name="num", type="integer")
     * @Required()
     */
    private $num;

    /**
     * @var int $limitip 
     * @Column(name="limitip", type="tinyint", default=0)
     */
    private $limitip;

    /**
     * @var string $time 
     * @Column(name="time", type="date", default="0000-00-00")
     */
    private $time;

    /**
     * @var int $tempid 
     * @Column(name="tempid", type="smallint", default=0)
     */
    private $tempid;

    /**
     * @var int $type 
     * @Column(name="type", type="tinyint")
     */
    private $type;

    /**
     * @var int $uptime 
     * @Column(name="uptime", type="integer")
     * @Required()
     */
    private $uptime;

    /**
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setNewsid(int $value): self
    {
        $this->newsid = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setTitle(string $value): self
    {
        $this->title = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setVotetext(string $value): self
    {
        $this->votetext = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setVotetype(int $value): self
    {
        $this->votetype = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setNum(int $value): self
    {
        $this->num = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setLimitip(int $value): self
    {
        $this->limitip = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setTime(string $value): self
    {
        $this->time = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setTempid(int $value): self
    {
        $this->tempid = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setType(int $value): self
    {
        $this->type = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setUptime(int $value): self
    {
        $this->uptime = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getNewsid()
    {
        return $this->newsid;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getVotetext()
    {
        return $this->votetext;
    }

    /**
     * @return int
     */
    public function getVotetype()
    {
        return $this->votetype;
    }

    /**
     * @return int
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * @return int
     */
    public function getLimitip()
    {
        return $this->limitip;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @return int
     */
    public function getTempid()
    {
        return $this->tempid;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getUptime()
    {
        return $this->uptime;
    }

}
