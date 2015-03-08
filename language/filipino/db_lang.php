<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2015, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str'] = 'Hindi matukoy ang mga setting ng database batay sa connection string na iyong isinumite.';
$lang['db_unable_to_connect'] = 'Hindi nagawang kumonekta sa iyong database server gamit ang mga ibinigay na setting.';
$lang['db_unable_to_select'] = 'Hindi magawang piliin ang tinukoy na database: %s';
$lang['db_unable_to_create'] = 'Hindi malikha ang tinukoy na database: %s';
$lang['db_invalid_query'] = 'Ang query na iyong isinumite ay hindi wasto.';
$lang['db_must_set_table'] = 'Dapat mong itakda ang database table na gagamitin sa iyong query.';
$lang['db_must_use_set'] = 'Dapat mong gamitin ang "set" metghod upang i-update ang isang entry.';
$lang['db_must_use_index'] = 'Dapat mong tukuyin ang isang index upang tumugma sa mga batch update.';
$lang['db_batch_missing_index'] = 'Ang isa o higit pang mga row na isinumite para sa batch na pag-update ay walang tinukoy na index';
$lang['db_must_use_where'] = 'Ang mga update ay hindi pinahihintulutan maliban kung naglalaman ang mga ito ng isang "where" clause.';
$lang['db_del_must_use_where'] = 'Ang mga delete ay hindi pinahihintulutan maliban kung naglalaman ang mga ito ng isang  "where" o "like" clause.';
$lang['db_field_param_missing'] = 'upang maka-fetch ng fields kinakailangan ang pangalan ng isang table bilang parameter.';
$lang['db_unsupported_function'] = 'Ang feature na ito ay hindi pwedeng magagamit para sa database na iyong ginagamit.';
$lang['db_transaction_failure'] = 'Bigo ang transakyon: Rollback ay naganap.';
$lang['db_unable_to_drop'] = 'Hindi magawang i-drop ang mga tinukoy na database.';
$lang['db_unsupported_feature'] = 'Hindi suportadong feature ng database platform na iyong ginagamit.';
$lang['db_unsupported_compression'] = 'Ang format ng file compression na iyong pinili ay hindi suportado ng iyong server.';
$lang['db_filepath_error'] = 'Hindi magawang magsulat ng data sa file path na iyong isinumite.';
$lang['db_invalid_cache_path'] = 'Ang cache path na iyong isinumite ay hindi wasto o writable.';
$lang['db_table_name_required'] = 'Ang isang pangalan ng table ay kinakailangan para sa operasyon na iyon.';
$lang['db_column_name_required'] = 'Ang isang pangalan ng column ay kinakailangan para sa operasyon na iyon.';
$lang['db_column_definition_required'] = 'Isang column definition ang kinakailangan para sa operasyon na iyon.';
$lang['db_unable_to_set_charset'] = 'Hindi makapag-set ng character client connection set: %s';
$lang['db_error_heading'] = 'Isang Database Error ang Naganap';
