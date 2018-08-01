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
 * @Table(name="mallbuilder_android_version")
 * @uses      MallbuilderAndroidVersion
 */
class MallbuilderAndroidVersion extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $version 版本号
     * @Column(name="version", type="string", length=60)
     */
    private $version;

    /**
     * @var string $url Android下载地址
     * @Column(name="url", type="string", length=255)
     */
    private $url;

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
     * 版本号
     * @param string $value
     * @return $this
     */
    public function setVersion(string $value): self
    {
        $this->version = $value;

        return $this;
    }

    /**
     * Android下载地址
     * @param string $value
     * @return $this
     */
    public function setUrl(string $value): self
    {
        $this->url = $value;

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
     * 版本号
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Android下载地址
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

}
