<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/restore.proto

namespace Google\Cloud\GkeBackup\V1\RestoreConfig;

use UnexpectedValueException;

/**
 * Defines the behavior for handling the situation where sets of namespaced
 * resources being restored already exist in the target cluster.
 *
 * Protobuf type <code>google.cloud.gkebackup.v1.RestoreConfig.NamespacedResourceRestoreMode</code>
 */
class NamespacedResourceRestoreMode
{
    /**
     * Unspecified (invalid).
     *
     * Generated from protobuf enum <code>NAMESPACED_RESOURCE_RESTORE_MODE_UNSPECIFIED = 0;</code>
     */
    const NAMESPACED_RESOURCE_RESTORE_MODE_UNSPECIFIED = 0;
    /**
     * When conflicting top-level resources (either Namespaces or
     * ProtectedApplications, depending upon the scope) are encountered, this
     * will first trigger a delete of the conflicting resource AND ALL OF ITS
     * REFERENCED RESOURCES (e.g., all resources in the Namespace or all
     * resources referenced by the ProtectedApplication) before restoring the
     * resources from the Backup. This mode should only be used when you are
     * intending to revert some portion of a cluster to an earlier state.
     *
     * Generated from protobuf enum <code>DELETE_AND_RESTORE = 1;</code>
     */
    const DELETE_AND_RESTORE = 1;
    /**
     * If conflicting top-level resources (either Namespaces or
     * ProtectedApplications, depending upon the scope) are encountered at the
     * beginning of a restore process, the Restore will fail.  If a conflict
     * occurs during the restore process itself (e.g., because an out of band
     * process creates conflicting resources), a conflict will be reported.
     *
     * Generated from protobuf enum <code>FAIL_ON_CONFLICT = 2;</code>
     */
    const FAIL_ON_CONFLICT = 2;

    private static $valueToName = [
        self::NAMESPACED_RESOURCE_RESTORE_MODE_UNSPECIFIED => 'NAMESPACED_RESOURCE_RESTORE_MODE_UNSPECIFIED',
        self::DELETE_AND_RESTORE => 'DELETE_AND_RESTORE',
        self::FAIL_ON_CONFLICT => 'FAIL_ON_CONFLICT',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


