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
 * 页面浏览统计

 * @Entity()
 * @Table(name="mallbuilder_uv")
 * @uses      MallbuilderUv
 */
class MallbuilderUv extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $pid 商品id
     * @Column(name="pid", type="integer")
     * @Required()
     */
    private $pid;

    /**
     * @var string $ip 
     * @Column(name="ip", type="string", length=25)
     */
    private $ip;

    /**
     * @var string $cookie 
     * @Column(name="cookie", type="string", length=50)
     * @Required()
     */
    private $cookie;

    /**
     * @var int $updateTime 更新时间
     * @Column(name="update_time", type="integer")
     */
    private $updateTime;

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
     * 商品id
     * @param int $value
     * @return $this
     */
    public function setPid(int $value): self
    {
        $this->pid = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setIp(string $value): self
    {
        $this->ip = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCookie(string $value): self
    {
        $this->cookie = $value;

        return $this;
    }

    /**
     * 更新时间
     * @param int $value
     * @return $this
     */
    public function setUpdateTime(int $value): self
    {
        $this->updateTime = $value;

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
     * 商品id
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @return string
     */
    public function getCookie()
    {
        return $this->cookie;
    }

    /**
     * 更新时间
     * @return int
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

}
