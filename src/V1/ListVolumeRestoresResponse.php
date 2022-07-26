<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/gkebackup.proto

namespace Google\Cloud\GkeBackup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for ListVolumeRestores.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.ListVolumeRestoresResponse</code>
 */
class ListVolumeRestoresResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of VolumeRestores matching the given criteria.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.VolumeRestore volume_restores = 1;</code>
     */
    private $volume_restores;
    /**
     * A token which may be sent as
     * [page_token][google.cloud.gkebackup.v1.ListVolumeRestoresRequest.page_token] in a subsequent
     * `ListVolumeRestores` call to retrieve the next page of results.
     * If this field is omitted or empty, then there are no more results to
     * return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\GkeBackup\V1\VolumeRestore[]|\Google\Protobuf\Internal\RepeatedField $volume_restores
     *           The list of VolumeRestores matching the given criteria.
     *     @type string $next_page_token
     *           A token which may be sent as
     *           [page_token][google.cloud.gkebackup.v1.ListVolumeRestoresRequest.page_token] in a subsequent
     *           `ListVolumeRestores` call to retrieve the next page of results.
     *           If this field is omitted or empty, then there are no more results to
     *           return.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Gkebackup::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of VolumeRestores matching the given criteria.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.VolumeRestore volume_restores = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVolumeRestores()
    {
        return $this->volume_restores;
    }

    /**
     * The list of VolumeRestores matching the given criteria.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.VolumeRestore volume_restores = 1;</code>
     * @param \Google\Cloud\GkeBackup\V1\VolumeRestore[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVolumeRestores($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\GkeBackup\V1\VolumeRestore::class);
        $this->volume_restores = $arr;

        return $this;
    }

    /**
     * A token which may be sent as
     * [page_token][google.cloud.gkebackup.v1.ListVolumeRestoresRequest.page_token] in a subsequent
     * `ListVolumeRestores` call to retrieve the next page of results.
     * If this field is omitted or empty, then there are no more results to
     * return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token which may be sent as
     * [page_token][google.cloud.gkebackup.v1.ListVolumeRestoresRequest.page_token] in a subsequent
     * `ListVolumeRestores` call to retrieve the next page of results.
     * If this field is omitted or empty, then there are no more results to
     * return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

