<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/restore.proto

namespace Google\Cloud\GkeBackup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines a selector to identify a single or a group of resources.
 * Conditions in the selector are optional, but at least one field
 * should be set to a non-empty value. If a condition is not specified,
 * no restrictions will be applied on that dimension.
 * If more than one condition is specified, a resource will be selected
 * if and only if all conditions are met.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.ResourceSelector</code>
 */
class ResourceSelector extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Selects resources using their Kubernetes GroupKinds. If
     * specified, only resources of provided GroupKind will be selected.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.GroupKind group_kind = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $group_kind = null;
    /**
     * Optional. Selects resources using their resource names. If specified,
     * only resources with the provided name will be selected.
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $name = '';
    /**
     * Optional. Selects resources using their namespaces. This only applies to
     * namespace scoped resources and cannot be used for selecting
     * cluster scoped resources. If specified, only resources in the provided
     * namespace will be selected. If not specified, the filter will apply to
     * both cluster scoped and namespace scoped resources (e.g. name or label).
     * The [Namespace](https://pkg.go.dev/k8s.io/api/core/v1#Namespace) resource
     * itself will be restored if and only if any resources within the namespace
     * are restored.
     *
     * Generated from protobuf field <code>string namespace = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $namespace = '';
    /**
     * Optional. Selects resources using Kubernetes
     * [labels](https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/).
     * If specified, a resource will be selected if and only if the resource
     * has all of the provided labels and all the label values match.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\GkeBackup\V1\RestoreConfig\GroupKind $group_kind
     *           Optional. Selects resources using their Kubernetes GroupKinds. If
     *           specified, only resources of provided GroupKind will be selected.
     *     @type string $name
     *           Optional. Selects resources using their resource names. If specified,
     *           only resources with the provided name will be selected.
     *     @type string $namespace
     *           Optional. Selects resources using their namespaces. This only applies to
     *           namespace scoped resources and cannot be used for selecting
     *           cluster scoped resources. If specified, only resources in the provided
     *           namespace will be selected. If not specified, the filter will apply to
     *           both cluster scoped and namespace scoped resources (e.g. name or label).
     *           The [Namespace](https://pkg.go.dev/k8s.io/api/core/v1#Namespace) resource
     *           itself will be restored if and only if any resources within the namespace
     *           are restored.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Selects resources using Kubernetes
     *           [labels](https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/).
     *           If specified, a resource will be selected if and only if the resource
     *           has all of the provided labels and all the label values match.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Restore::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Selects resources using their Kubernetes GroupKinds. If
     * specified, only resources of provided GroupKind will be selected.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.GroupKind group_kind = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\GkeBackup\V1\RestoreConfig\GroupKind|null
     */
    public function getGroupKind()
    {
        return $this->group_kind;
    }

    public function hasGroupKind()
    {
        return isset($this->group_kind);
    }

    public function clearGroupKind()
    {
        unset($this->group_kind);
    }

    /**
     * Optional. Selects resources using their Kubernetes GroupKinds. If
     * specified, only resources of provided GroupKind will be selected.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.GroupKind group_kind = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\GkeBackup\V1\RestoreConfig\GroupKind $var
     * @return $this
     */
    public function setGroupKind($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeBackup\V1\RestoreConfig\GroupKind::class);
        $this->group_kind = $var;

        return $this;
    }

    /**
     * Optional. Selects resources using their resource names. If specified,
     * only resources with the provided name will be selected.
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Optional. Selects resources using their resource names. If specified,
     * only resources with the provided name will be selected.
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. Selects resources using their namespaces. This only applies to
     * namespace scoped resources and cannot be used for selecting
     * cluster scoped resources. If specified, only resources in the provided
     * namespace will be selected. If not specified, the filter will apply to
     * both cluster scoped and namespace scoped resources (e.g. name or label).
     * The [Namespace](https://pkg.go.dev/k8s.io/api/core/v1#Namespace) resource
     * itself will be restored if and only if any resources within the namespace
     * are restored.
     *
     * Generated from protobuf field <code>string namespace = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Optional. Selects resources using their namespaces. This only applies to
     * namespace scoped resources and cannot be used for selecting
     * cluster scoped resources. If specified, only resources in the provided
     * namespace will be selected. If not specified, the filter will apply to
     * both cluster scoped and namespace scoped resources (e.g. name or label).
     * The [Namespace](https://pkg.go.dev/k8s.io/api/core/v1#Namespace) resource
     * itself will be restored if and only if any resources within the namespace
     * are restored.
     *
     * Generated from protobuf field <code>string namespace = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace = $var;

        return $this;
    }

    /**
     * Optional. Selects resources using Kubernetes
     * [labels](https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/).
     * If specified, a resource will be selected if and only if the resource
     * has all of the provided labels and all the label values match.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Selects resources using Kubernetes
     * [labels](https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/).
     * If specified, a resource will be selected if and only if the resource
     * has all of the provided labels and all the label values match.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}
