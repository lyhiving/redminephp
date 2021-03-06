<?php

class ProjectCustomField extends CustomField
{
    var $name = 'ProjectCustomField';
    var $alias = 'ProjectCustomField';
    var $useTable = 'custom_fields';
    var $belongsTo = array();
    var $hasMany = array();
    var $hasAndBelongsToMany = array();

    function beforeFind(&$queryData)
    {
        $ret = parent::beforeFind($queryData);
        if (is_array($ret)) {
            $queryData = $ret;
        }

        if ($queryData['conditions'] == null) {
            $queryData['conditions'] = array();
        }
        $queryData['conditions'][$this->name . '.type'] = $this->name;

        return $queryData;
    }

}

## redMine - project management software
## Copyright (C) 2006  Jean-Philippe Lang
##
## This program is free software; you can redistribute it and/or
## modify it under the terms of the GNU General Public License
## as published by the Free Software Foundation; either version 2
## of the License, or (at your option) any later version.
## 
## This program is distributed in the hope that it will be useful,
## but WITHOUT ANY WARRANTY; without even the implied warranty of
## MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
## GNU General Public License for more details.
## 
## You should have received a copy of the GNU General Public License
## along with this program; if not, write to the Free Software
## Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
#
#class ProjectCustomField < CustomField
#  def type_name
#    :label_project_plural
#  end
#end
