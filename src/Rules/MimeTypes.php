<?php

namespace KodiComponents\LaravelValidationRules\Rules;

class MimeTypes
{
    /**
     * @var array
     */
    protected $types;

    /**
     * MimeTypes constructor.
     *
     * @param array $types
     */
    public function __construct(array $types = [])
    {
        $this->types = $types;
    }

    public function video()
    {
        $this->types = [
            'video/avi',
            'video/mpeg',
            'video/mp4',
            'video/ogg',
            'video/webm',
            'video/x-ms-wmv',
            'video/x-flv',
            'video/3gpp',
            'video/3gpp2',
            'video/quicktime',
        ];
    }

    public function text()
    {
        $this->types = [
            'text/cmd',
            'text/css',
            'text/csv',
            'text/html',
            'text/javascript',
            'text/plain',
            'text/php',
            'text/xml',
        ];
    }

    public function image()
    {
        $this->types = [
            'image/gif',
            'image/jpeg',
            'image/pjpeg',
            'image/png',
            'image/tiff',
        ];
    }

    public function audio()
    {
        $this->types = [
            'audio/mp4',
            'audio/aac',
            'audio/mpeg',
            'audio/ogg',
        ];
    }

    /**
     * Convert the rule to a validation string.
     *
     * @return string
     */
    public function __toString()
    {
        return 'mimetypes:'.implode(',', $this->types);
    }
}