<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/gkebackup.proto

namespace GPBMetadata\Google\Cloud\Gkebackup\V1;

class Gkebackup
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Backup::initOnce();
        \GPBMetadata\Google\Cloud\Gkebackup\V1\BackupPlan::initOnce();
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Restore::initOnce();
        \GPBMetadata\Google\Cloud\Gkebackup\V1\RestorePlan::initOnce();
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Volume::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�O
)google/cloud/gkebackup/v1/gkebackup.protogoogle.cloud.gkebackup.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto&google/cloud/gkebackup/v1/backup.proto+google/cloud/gkebackup/v1/backup_plan.proto\'google/cloud/gkebackup/v1/restore.proto,google/cloud/gkebackup/v1/restore_plan.proto&google/cloud/gkebackup/v1/volume.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�A"�
CreateBackupPlanRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location?
backup_plan (2%.google.cloud.gkebackup.v1.BackupPlanB�A
backup_plan_id (	B�A"�
ListBackupPlansRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	
order_by (	"�
ListBackupPlansResponse;
backup_plans (2%.google.cloud.gkebackup.v1.BackupPlan
next_page_token (	
unreachable (	"Q
GetBackupPlanRequest9
name (	B+�A�A%
#gkebackup.googleapis.com/BackupPlan"�
UpdateBackupPlanRequest?
backup_plan (2%.google.cloud.gkebackup.v1.BackupPlanB�A/
update_mask (2.google.protobuf.FieldMask"b
DeleteBackupPlanRequest9
name (	B+�A�A%
#gkebackup.googleapis.com/BackupPlan
etag (	"�
CreateBackupRequest;
parent (	B+�A�A%
#gkebackup.googleapis.com/BackupPlan1
backup (2!.google.cloud.gkebackup.v1.Backup
	backup_id (	"�
ListBackupsRequest;
parent (	B+�A�A%
#gkebackup.googleapis.com/BackupPlan
	page_size (

page_token (	
filter (	
order_by (	"b
ListBackupsResponse2
backups (2!.google.cloud.gkebackup.v1.Backup
next_page_token (	"I
GetBackupRequest5
name (	B\'�A�A!
gkebackup.googleapis.com/Backup"~
UpdateBackupRequest6
backup (2!.google.cloud.gkebackup.v1.BackupB�A/
update_mask (2.google.protobuf.FieldMask"i
DeleteBackupRequest5
name (	B\'�A�A!
gkebackup.googleapis.com/Backup
etag (	
force ("�
ListVolumeBackupsRequest7
parent (	B\'�A�A!
gkebackup.googleapis.com/Backup
	page_size (

page_token (	
filter (	
order_by (	"u
ListVolumeBackupsResponse?
volume_backups (2\'.google.cloud.gkebackup.v1.VolumeBackup
next_page_token (	"U
GetVolumeBackupRequest;
name (	B-�A�A\'
%gkebackup.googleapis.com/VolumeBackup"�
CreateRestorePlanRequest9
parent (	B)�A�A#
!locations.googleapis.com/LocationA
restore_plan (2&.google.cloud.gkebackup.v1.RestorePlanB�A
restore_plan_id (	B�A"�
ListRestorePlansRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	
order_by (	"�
ListRestorePlansResponse=
restore_plans (2&.google.cloud.gkebackup.v1.RestorePlan
next_page_token (	
unreachable (	"S
GetRestorePlanRequest:
name (	B,�A�A&
$gkebackup.googleapis.com/RestorePlan"�
UpdateRestorePlanRequestA
restore_plan (2&.google.cloud.gkebackup.v1.RestorePlanB�A/
update_mask (2.google.protobuf.FieldMask"s
DeleteRestorePlanRequest:
name (	B,�A�A&
$gkebackup.googleapis.com/RestorePlan
etag (	
force ("�
CreateRestoreRequest<
parent (	B,�A�A&
$gkebackup.googleapis.com/RestorePlan8
restore (2".google.cloud.gkebackup.v1.RestoreB�A

restore_id (	B�A"�
ListRestoresRequest<
parent (	B,�A�A&
$gkebackup.googleapis.com/RestorePlan
	page_size (

page_token (	
filter (	
order_by (	"z
ListRestoresResponse4
restores (2".google.cloud.gkebackup.v1.Restore
next_page_token (	
unreachable (	"K
GetRestoreRequest6
name (	B(�A�A"
 gkebackup.googleapis.com/Restore"�
UpdateRestoreRequest8
restore (2".google.cloud.gkebackup.v1.RestoreB�A/
update_mask (2.google.protobuf.FieldMask"k
DeleteRestoreRequest6
name (	B(�A�A"
 gkebackup.googleapis.com/Restore
etag (	
force ("�
ListVolumeRestoresRequest8
parent (	B(�A�A"
 gkebackup.googleapis.com/Restore
	page_size (

page_token (	
filter (	
order_by (	"x
ListVolumeRestoresResponseA
volume_restores (2(.google.cloud.gkebackup.v1.VolumeRestore
next_page_token (	"W
GetVolumeRestoreRequest<
name (	B.�A�A(
&gkebackup.googleapis.com/VolumeRestore2�(
BackupForGKE�
CreateBackupPlan2.google.cloud.gkebackup.v1.CreateBackupPlanRequest.google.longrunning.Operation"����>"//v1/{parent=projects/*/locations/*}/backupPlans:backup_plan�A!parent,backup_plan,backup_plan_id�A

BackupPlanOperationMetadata�
ListBackupPlans1.google.cloud.gkebackup.v1.ListBackupPlansRequest2.google.cloud.gkebackup.v1.ListBackupPlansResponse"@���1//v1/{parent=projects/*/locations/*}/backupPlans�Aparent�
GetBackupPlan/.google.cloud.gkebackup.v1.GetBackupPlanRequest%.google.cloud.gkebackup.v1.BackupPlan">���1//v1/{name=projects/*/locations/*/backupPlans/*}�Aname�
UpdateBackupPlan2.google.cloud.gkebackup.v1.UpdateBackupPlanRequest.google.longrunning.Operation"����J2;/v1/{backup_plan.name=projects/*/locations/*/backupPlans/*}:backup_plan�Abackup_plan,update_mask�A

BackupPlanOperationMetadata�
DeleteBackupPlan2.google.cloud.gkebackup.v1.DeleteBackupPlanRequest.google.longrunning.Operation"k���1*//v1/{name=projects/*/locations/*/backupPlans/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
CreateBackup..google.cloud.gkebackup.v1.CreateBackupRequest.google.longrunning.Operation"����C"9/v1/{parent=projects/*/locations/*/backupPlans/*}/backups:backup�Aparent,backup,backup_id�A
BackupOperationMetadata�
ListBackups-.google.cloud.gkebackup.v1.ListBackupsRequest..google.cloud.gkebackup.v1.ListBackupsResponse"J���;9/v1/{parent=projects/*/locations/*/backupPlans/*}/backups�Aparent�
	GetBackup+.google.cloud.gkebackup.v1.GetBackupRequest!.google.cloud.gkebackup.v1.Backup"H���;9/v1/{name=projects/*/locations/*/backupPlans/*/backups/*}�Aname�
UpdateBackup..google.cloud.gkebackup.v1.UpdateBackupRequest.google.longrunning.Operation"����J2@/v1/{backup.name=projects/*/locations/*/backupPlans/*/backups/*}:backup�Abackup,update_mask�A
BackupOperationMetadata�
DeleteBackup..google.cloud.gkebackup.v1.DeleteBackupRequest.google.longrunning.Operation"u���;*9/v1/{name=projects/*/locations/*/backupPlans/*/backups/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
ListVolumeBackups3.google.cloud.gkebackup.v1.ListVolumeBackupsRequest4.google.cloud.gkebackup.v1.ListVolumeBackupsResponse"Z���KI/v1/{parent=projects/*/locations/*/backupPlans/*/backups/*}/volumeBackups�Aparent�
GetVolumeBackup1.google.cloud.gkebackup.v1.GetVolumeBackupRequest\'.google.cloud.gkebackup.v1.VolumeBackup"X���KI/v1/{name=projects/*/locations/*/backupPlans/*/backups/*/volumeBackups/*}�Aname�
CreateRestorePlan3.google.cloud.gkebackup.v1.CreateRestorePlanRequest.google.longrunning.Operation"����@"0/v1/{parent=projects/*/locations/*}/restorePlans:restore_plan�A#parent,restore_plan,restore_plan_id�A 
RestorePlanOperationMetadata�
ListRestorePlans2.google.cloud.gkebackup.v1.ListRestorePlansRequest3.google.cloud.gkebackup.v1.ListRestorePlansResponse"A���20/v1/{parent=projects/*/locations/*}/restorePlans�Aparent�
GetRestorePlan0.google.cloud.gkebackup.v1.GetRestorePlanRequest&.google.cloud.gkebackup.v1.RestorePlan"?���20/v1/{name=projects/*/locations/*/restorePlans/*}�Aname�
UpdateRestorePlan3.google.cloud.gkebackup.v1.UpdateRestorePlanRequest.google.longrunning.Operation"����M2=/v1/{restore_plan.name=projects/*/locations/*/restorePlans/*}:restore_plan�Arestore_plan,update_mask�A 
RestorePlanOperationMetadata�
DeleteRestorePlan3.google.cloud.gkebackup.v1.DeleteRestorePlanRequest.google.longrunning.Operation"l���2*0/v1/{name=projects/*/locations/*/restorePlans/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
CreateRestore/.google.cloud.gkebackup.v1.CreateRestoreRequest.google.longrunning.Operation"����F";/v1/{parent=projects/*/locations/*/restorePlans/*}/restores:restore�Aparent,restore,restore_id�A
RestoreOperationMetadata�
ListRestores..google.cloud.gkebackup.v1.ListRestoresRequest/.google.cloud.gkebackup.v1.ListRestoresResponse"L���=;/v1/{parent=projects/*/locations/*/restorePlans/*}/restores�Aparent�

GetRestore,.google.cloud.gkebackup.v1.GetRestoreRequest".google.cloud.gkebackup.v1.Restore"J���=;/v1/{name=projects/*/locations/*/restorePlans/*/restores/*}�Aname�
UpdateRestore/.google.cloud.gkebackup.v1.UpdateRestoreRequest.google.longrunning.Operation"����N2C/v1/{restore.name=projects/*/locations/*/restorePlans/*/restores/*}:restore�Arestore,update_mask�A
RestoreOperationMetadata�
DeleteRestore/.google.cloud.gkebackup.v1.DeleteRestoreRequest.google.longrunning.Operation"w���=*;/v1/{name=projects/*/locations/*/restorePlans/*/restores/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
ListVolumeRestores4.google.cloud.gkebackup.v1.ListVolumeRestoresRequest5.google.cloud.gkebackup.v1.ListVolumeRestoresResponse"]���NL/v1/{parent=projects/*/locations/*/restorePlans/*/restores/*}/volumeRestores�Aparent�
GetVolumeRestore2.google.cloud.gkebackup.v1.GetVolumeRestoreRequest(.google.cloud.gkebackup.v1.VolumeRestore"[���NL/v1/{name=projects/*/locations/*/restorePlans/*/restores/*/volumeRestores/*}�AnameL�Agkebackup.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.gkebackup.v1BGKEBackupProtoPZBgoogle.golang.org/genproto/googleapis/cloud/gkebackup/v1;gkebackup�Google.Cloud.GkeBackup.V1�Google\\Cloud\\GkeBackup\\V1�Google::Cloud::GkeBackup::V1�A^
 container.googleapis.com/Cluster:projects/{project}/locations/{location}/clusters/{cluster}�Ax
!cloudkms.googleapis.com/CryptoKeySprojects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

