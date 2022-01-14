<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApprovalCommittee extends Model
{
  protected $fillable = [
    'approvalCommitteeStaffID', 'approvalCommitteeName', 'approvalCommitteeUsername', 'approvalCommitteePhoneNo', 'approvalCommitteeOrg', 'approvalCommitteePosition',
    ];

    protected $primaryKey = 'id';
    protected $table = '_approval_committee';
    public $timestamps = false;
}