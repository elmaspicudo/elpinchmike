<?php

namespace EstudioBundle\Entity;

/**
 * imagen
 */
class imagen
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $path;

    /**
     * @var string
     */
    private $imagen;

    /**
     * @var \DateTime
     */
    private $updated;


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
     * Set path
     *
     * @param string $path
     *
     * @return imagen
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return imagen
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return imagen
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }
      /**
     * Manages the copying of the file to the relevant place on the server
     */
    public function upload()
    {
        // the file property can be empty if the field is not required
        if (null === $this->getImagen()) {
            return;
        }

        // we use the original file name here but you should
        // sanitize it at least to avoid any security issues
        $extension = $this->getImagen()->guessExtension();
        $nombre = urlencode($this->getImagen()->getClientOriginalName());
        $nombre = time().'-'.substr($nombre, 0, 8);
        $nombreFinal = $nombre.'.'.$extension;
        // move takes the target directory and target filename as params
        $this->getImagen()->move(
            $this->getUploadRootDir(),
            $nombreFinal
        );

        // set the path property to the filename where you've saved the file
        $this->path = $nombreFinal;
        $this->setUpdated(new \DateTime("now"));
        // clean up the f$this->path = $this->getFile()->getClientOriginalName();ile property as you won't need it anymore
        $this->setImagen(null);
    }

    /**
     * Lifecycle callback to upload the file to the server
     */
    public function lifecycleFileUpload() {
        $this->upload();
    }

    /**
     * Updates the hash value to force the preUpdate and postUpdate events to fire
     */
    public function refreshUpdated() {
        $this->setUpdated(new \DateTime("now"));
    }

    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'images/investigados';
    }
   
}

