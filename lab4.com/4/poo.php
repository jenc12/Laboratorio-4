<?php
class trabajo
{
    public $contra;
    public $salt;

    public function base64()
    {
        return base64_encode($this->contra . $this->salt);
    }

    public function Md5()
    {
        return Md5($this->contra . $this->salt);
    }

    public function Sha1()
    {
        return Sha1($this->contra . $this->salt);
    }

    public function Crc32()
    {
        return Crc32($this->contra . $this->salt);
    }

    public function Crypt()
    {
        return crypt($this->contra , $this->salt);
    }

    public function sha224()
    {
        return hash('sha224',$this->contra . $this->salt);
    }

    public function sha512()
    {
        return hash('sha512',$this->contra . $this->salt);
    }

    public function whirlpool()
    {
        return hash('whirlpool',$this->contra . $this->salt);
    }

    public function snefru()
    {
        return hash('snefru',$this->contra . $this->salt);
    }

    public function haval1283()
    {
        return hash('haval128,3',$this->contra . $this->salt);
    }

    public function haval1285()
    {
        return hash('haval128,5',$this->contra . $this->salt);
    }

    public function setContra($contra)
    {
        $this->contra = $contra;
    }
    public function getContra()
    {
        return $this->contra;
    }
    public function setsalt($salt)
    {
        $this->salt = $salt;
    }
    public function getsalt()
    {
        return $this->salt;
    }
}