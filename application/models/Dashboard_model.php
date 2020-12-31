<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

    class Dashboard_model extends CI_Model{
    
        public function count_group_periode_payment($date1,$date2){
            return $this->db->select('sum(jml_pembayaran) as count, DATE(tgl_pembayaran) tanggal,agent2')
                    ->where('tgl_pembayaran >=','"'.$date2.'"',FALSE)
                    ->where('tgl_pembayaran <=','"'.$date1.'"',FALSE)
                    ->group_by('tgl_pembayaran')
                    ->order_by('tgl_pembayaran','desc')
                    ->get('add_payment');
		}
		public function agent_group($date1,$date2){
            return $this->db->select('agent2')
                    ->where('tgl_pembayaran >=','"'.$date2.'"',FALSE)
                    ->where('tgl_pembayaran <=','"'.$date1.'"',FALSE)
                    ->group_by('agent2')
                    ->order_by('tgl_pembayaran','desc')
                    ->get('add_payment');
		}
		public function count_periode_payment($date1,$date2){
            return $this->db->select('jml_pembayaran, DATE(tgl_pembayaran) tanggal,agent2')
                    ->where('tgl_pembayaran >=','"'.$date2.'"',FALSE)
                    ->where('tgl_pembayaran <=','"'.$date1.'"',FALSE)
                    ->order_by('tgl_pembayaran','desc')
                    ->get('add_payment');
		}
    }
