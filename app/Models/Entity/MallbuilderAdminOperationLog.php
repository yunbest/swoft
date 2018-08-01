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
 * 管理员操作记录表

 * @Entity()
 * @Table(name="mallbuilder_admin_operation_log")
 * @uses      MallbuilderAdminOperationLog
 */
class MallbuilderAdminOperationLog extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $user 管理员帐号
     * @Column(name="user", type="string", length=20)
     */
    private $user;

    /**
     * @var string $scriptname 文件名
     * @Column(name="scriptname", type="string", length=50)
     */
    private $scriptname;

    /**
     * @var string $url 地址
     * @Column(name="url", type="string", length=200)
     */
    private $url;

    /**
     * @var int $time 创建时间
     * @Column(name="time", type="integer")
     */
    private $time;

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
     * 管理员帐号
     * @param string $value
     * @return $this
     */
    public function setUser(string $value): self
    {
        $this->user = $value;

        return $this;
    }

    /**
     * 文件名
     * @param string $value
     * @return $this
     */
    public function setScriptname(string $value): self
    {
        $this->scriptname = $value;

        return $this;
    }

    /**
     * 地址
     * @param string $value
     * @return $this
     */
    public function setUrl(string $value): self
    {
        $this->url = $value;

        return $this;
    }

    /**
     * 创建时间
     * @param int $value
     * @return $this
     */
    public function setTime(int $value): self
    {
        $this->time = $value;

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
     * 管理员帐号
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * 文件名
     * @return string
     */
    public function getScriptname()
    {
        return $this->scriptname;
    }

    /**
     * 地址
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * 创建时间
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

}
