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
 * 店铺模板表

 * @Entity()
 * @Table(name="mallbuilder_shop_template")
 * @uses      MallbuilderShopTemplate
 */
class MallbuilderShopTemplate extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $name 名称
     * @Column(name="name", type="string", length=60)
     * @Required()
     */
    private $name;

    /**
     * @var string $style 风格
     * @Column(name="style", type="string", length=50)
     * @Required()
     */
    private $style;

    /**
     * @var string $tempFile 模板文件
     * @Column(name="temp_file", type="string", length=60)
     * @Required()
     */
    private $tempFile;

    /**
     * @var int $createTime 创建时间
     * @Column(name="create_time", type="integer")
     * @Required()
     */
    private $createTime;

    /**
     * @var int $displayorder 排序
     * @Column(name="displayorder", type="smallint", default=255)
     */
    private $displayorder;

    /**
     * @var int $status 状态
     * @Column(name="status", type="tinyint", default=0)
     */
    private $status;

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
     * 风格
     * @param string $value
     * @return $this
     */
    public function setStyle(string $value): self
    {
        $this->style = $value;

        return $this;
    }

    /**
     * 模板文件
     * @param string $value
     * @return $this
     */
    public function setTempFile(string $value): self
    {
        $this->tempFile = $value;

        return $this;
    }

    /**
     * 创建时间
     * @param int $value
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * 排序
     * @param int $value
     * @return $this
     */
    public function setDisplayorder(int $value): self
    {
        $this->displayorder = $value;

        return $this;
    }

    /**
     * 状态
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

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
     * 风格
     * @return string
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * 模板文件
     * @return string
     */
    public function getTempFile()
    {
        return $this->tempFile;
    }

    /**
     * 创建时间
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * 排序
     * @return mixed
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

    /**
     * 状态
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

}
