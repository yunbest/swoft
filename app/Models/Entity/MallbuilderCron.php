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
 * 计划任务表

 * @Entity()
 * @Table(name="mallbuilder_cron")
 * @uses      MallbuilderCron
 */
class MallbuilderCron extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $name 名称
     * @Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string $script 脚本
     * @Column(name="script", type="string", length=50)
     */
    private $script;

    /**
     * @var int $lasttransact 上次执行时间
     * @Column(name="lasttransact", type="integer")
     */
    private $lasttransact;

    /**
     * @var int $nexttransact 下次执行时间
     * @Column(name="nexttransact", type="integer")
     */
    private $nexttransact;

    /**
     * @var string $week 每周
     * @Column(name="week", type="string", length=12, default="-1")
     */
    private $week;

    /**
     * @var string $day 每周
     * @Column(name="day", type="string", length=2, default="-1")
     */
    private $day;

    /**
     * @var string $hours 小时
     * @Column(name="hours", type="string", length=2, default="00")
     */
    private $hours;

    /**
     * @var string $minutes 分钟
     * @Column(name="minutes", type="string", length=2, default="00")
     */
    private $minutes;

    /**
     * @var int $active 是否启用
     * @Column(name="active", type="tinyint", default=0)
     */
    private $active;

    /**
     * ID
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 名称
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 脚本
     * @param string $value
     * @return $this
     */
    public function setScript(string $value): self
    {
        $this->script = $value;

        return $this;
    }

    /**
     * 上次执行时间
     * @param int $value
     * @return $this
     */
    public function setLasttransact(int $value): self
    {
        $this->lasttransact = $value;

        return $this;
    }

    /**
     * 下次执行时间
     * @param int $value
     * @return $this
     */
    public function setNexttransact(int $value): self
    {
        $this->nexttransact = $value;

        return $this;
    }

    /**
     * 每周
     * @param string $value
     * @return $this
     */
    public function setWeek(string $value): self
    {
        $this->week = $value;

        return $this;
    }

    /**
     * 每周
     * @param string $value
     * @return $this
     */
    public function setDay(string $value): self
    {
        $this->day = $value;

        return $this;
    }

    /**
     * 小时
     * @param string $value
     * @return $this
     */
    public function setHours(string $value): self
    {
        $this->hours = $value;

        return $this;
    }

    /**
     * 分钟
     * @param string $value
     * @return $this
     */
    public function setMinutes(string $value): self
    {
        $this->minutes = $value;

        return $this;
    }

    /**
     * 是否启用
     * @param int $value
     * @return $this
     */
    public function setActive(int $value): self
    {
        $this->active = $value;

        return $this;
    }

    /**
     * ID
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 名称
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 脚本
     * @return string
     */
    public function getScript()
    {
        return $this->script;
    }

    /**
     * 上次执行时间
     * @return int
     */
    public function getLasttransact()
    {
        return $this->lasttransact;
    }

    /**
     * 下次执行时间
     * @return int
     */
    public function getNexttransact()
    {
        return $this->nexttransact;
    }

    /**
     * 每周
     * @return mixed
     */
    public function getWeek()
    {
        return $this->week;
    }

    /**
     * 每周
     * @return mixed
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * 小时
     * @return mixed
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * 分钟
     * @return mixed
     */
    public function getMinutes()
    {
        return $this->minutes;
    }

    /**
     * 是否启用
     * @return int
     */
    public function getActive()
    {
        return $this->active;
    }

}
