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
 * 管理员用户组表

 * @Entity()
 * @Table(name="mallbuilder_admin_group")
 * @uses      MallbuilderAdminGroup
 */
class MallbuilderAdminGroup extends Model
{
    /**
     * @var int $groupId 组Id
     * @Id()
     * @Column(name="group_id", type="smallint")
     */
    private $groupId;

    /**
     * @var string $groupName 组名称
     * @Column(name="group_name", type="string", length=60)
     * @Required()
     */
    private $groupName;

    /**
     * @var string $groupPerms 组权限
     * @Column(name="group_perms", type="text", length=65535)
     * @Required()
     */
    private $groupPerms;

    /**
     * @var string $groupDesc 组描述
     * @Column(name="group_desc", type="string", length=250)
     * @Required()
     */
    private $groupDesc;

    /**
     * 组Id
     * @param int $value
     * @return $this
     */
    public function setGroupId(int $value)
    {
        $this->groupId = $value;

        return $this;
    }

    /**
     * 组名称
     * @param string $value
     * @return $this
     */
    public function setGroupName(string $value): self
    {
        $this->groupName = $value;

        return $this;
    }

    /**
     * 组权限
     * @param string $value
     * @return $this
     */
    public function setGroupPerms(string $value): self
    {
        $this->groupPerms = $value;

        return $this;
    }

    /**
     * 组描述
     * @param string $value
     * @return $this
     */
    public function setGroupDesc(string $value): self
    {
        $this->groupDesc = $value;

        return $this;
    }

    /**
     * 组Id
     * @return mixed
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * 组名称
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * 组权限
     * @return string
     */
    public function getGroupPerms()
    {
        return $this->groupPerms;
    }

    /**
     * 组描述
     * @return string
     */
    public function getGroupDesc()
    {
        return $this->groupDesc;
    }

}
