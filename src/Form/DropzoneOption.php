<?php

namespace Emrdev\SymfonyDropzone\Form;


/**
 * @see https://docs.dropzone.dev/configuration/basics/configuration-options
 */
class DropzoneOption
{
     private string $method = "POST";
     private bool $withCredentials = false;
     private ?int $timeout = null;
     private int $thumbnailWidth = 120;
     private int $thumbnailHeight = 120;
     private string $thumbnailMethod = "crop";
     private ?int $resizeWidth = null;
     private ?int $resizeHeight = null;
     private ?string $resizeMimeType = null;
     private string $resizeMethod = "contain";
     private int $filesizeBase = 1024;
     private ?string $headers = null;
     private bool $clickable = true;
     private bool $ignoreHiddenFiles = true;
     private ?string $acceptedFiles = null;
     private bool $autoProcessQueue = true;
     private bool $autoQueue = true;
     private bool $addRemoveLinks = true;
     private ?string $previewsContainer = null;
     private ?string $renameFile = null;

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param string $method
     */
    public function setMethod(string $method): void
    {
        $this->method = $method;
    }

    /**
     * @return bool
     */
    public function isWithCredentials(): bool
    {
        return $this->withCredentials;
    }

    /**
     * @param bool $withCredentials
     */
    public function setWithCredentials(bool $withCredentials): void
    {
        $this->withCredentials = $withCredentials;
    }

    /**
     * @return int|null
     */
    public function getTimeout(): ?int
    {
        return $this->timeout;
    }

    /**
     * @param int|null $timeout
     */
    public function setTimeout(?int $timeout): void
    {
        $this->timeout = $timeout;
    }

    /**
     * @return int
     */
    public function getThumbnailWidth(): int
    {
        return $this->thumbnailWidth;
    }

    /**
     * @param int $thumbnailWidth
     */
    public function setThumbnailWidth(int $thumbnailWidth): void
    {
        $this->thumbnailWidth = $thumbnailWidth;
    }

    /**
     * @return int
     */
    public function getThumbnailHeight(): int
    {
        return $this->thumbnailHeight;
    }

    /**
     * @param int $thumbnailHeight
     */
    public function setThumbnailHeight(int $thumbnailHeight): void
    {
        $this->thumbnailHeight = $thumbnailHeight;
    }

    /**
     * @return string
     */
    public function getThumbnailMethod(): string
    {
        return $this->thumbnailMethod;
    }

    /**
     * @param string $thumbnailMethod
     */
    public function setThumbnailMethod(string $thumbnailMethod): void
    {
        $this->thumbnailMethod = $thumbnailMethod;
    }

    /**
     * @return int|null
     */
    public function getResizeWidth(): ?int
    {
        return $this->resizeWidth;
    }

    /**
     * @param int|null $resizeWidth
     */
    public function setResizeWidth(?int $resizeWidth): void
    {
        $this->resizeWidth = $resizeWidth;
    }

    /**
     * @return int|null
     */
    public function getResizeHeight(): ?int
    {
        return $this->resizeHeight;
    }

    /**
     * @param int|null $resizeHeight
     */
    public function setResizeHeight(?int $resizeHeight): void
    {
        $this->resizeHeight = $resizeHeight;
    }

    /**
     * @return string|null
     */
    public function getResizeMimeType(): ?string
    {
        return $this->resizeMimeType;
    }

    /**
     * @param string|null $resizeMimeType
     */
    public function setResizeMimeType(?string $resizeMimeType): void
    {
        $this->resizeMimeType = $resizeMimeType;
    }

    /**
     * @return string
     */
    public function getResizeMethod(): string
    {
        return $this->resizeMethod;
    }

    /**
     * @param string $resizeMethod
     */
    public function setResizeMethod(string $resizeMethod): void
    {
        $this->resizeMethod = $resizeMethod;
    }

    /**
     * @return int
     */
    public function getFilesizeBase(): int
    {
        return $this->filesizeBase;
    }

    /**
     * @param int $filesizeBase
     */
    public function setFilesizeBase(int $filesizeBase): void
    {
        $this->filesizeBase = $filesizeBase;
    }

    /**
     * @return string|null
     */
    public function getHeaders(): ?string
    {
        return $this->headers;
    }

    /**
     * @param string|null $headers
     */
    public function setHeaders(?string $headers): void
    {
        $this->headers = $headers;
    }

    /**
     * @return bool
     */
    public function isClickable(): bool
    {
        return $this->clickable;
    }

    /**
     * @param bool $clickable
     */
    public function setClickable(bool $clickable): void
    {
        $this->clickable = $clickable;
    }

    /**
     * @return bool
     */
    public function isIgnoreHiddenFiles(): bool
    {
        return $this->ignoreHiddenFiles;
    }

    /**
     * @param bool $ignoreHiddenFiles
     */
    public function setIgnoreHiddenFiles(bool $ignoreHiddenFiles): void
    {
        $this->ignoreHiddenFiles = $ignoreHiddenFiles;
    }

    /**
     * @return string|null
     */
    public function getAcceptedFiles(): ?string
    {
        return $this->acceptedFiles;
    }

    /**
     * @param string|null $acceptedFiles
     */
    public function setAcceptedFiles(?string $acceptedFiles): void
    {
        $this->acceptedFiles = $acceptedFiles;
    }

    /**
     * @return bool
     */
    public function isAutoProcessQueue(): bool
    {
        return $this->autoProcessQueue;
    }

    /**
     * @param bool $autoProcessQueue
     */
    public function setAutoProcessQueue(bool $autoProcessQueue): void
    {
        $this->autoProcessQueue = $autoProcessQueue;
    }

    /**
     * @return bool
     */
    public function isAutoQueue(): bool
    {
        return $this->autoQueue;
    }

    /**
     * @param bool $autoQueue
     */
    public function setAutoQueue(bool $autoQueue): void
    {
        $this->autoQueue = $autoQueue;
    }

    /**
     * @return bool
     */
    public function isAddRemoveLinks(): bool
    {
        return $this->addRemoveLinks;
    }

    /**
     * @param bool $addRemoveLinks
     */
    public function setAddRemoveLinks(bool $addRemoveLinks): void
    {
        $this->addRemoveLinks = $addRemoveLinks;
    }

    /**
     * @return string|null
     */
    public function getPreviewsContainer(): ?string
    {
        return $this->previewsContainer;
    }

    /**
     * @param string|null $previewsContainer
     */
    public function setPreviewsContainer(?string $previewsContainer): void
    {
        $this->previewsContainer = $previewsContainer;
    }

    /**
     * @return string|null
     */
    public function getRenameFile(): ?string
    {
        return $this->renameFile;
    }

    /**
     * @param string|null $renameFile
     */
    public function setRenameFile(?string $renameFile): void
    {
        $this->renameFile = $renameFile;
    }


}