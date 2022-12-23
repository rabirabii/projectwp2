<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelLagu extends CI_Model
{
    // Manajemen Lagu
    public function getLagu()
    {
        return $this->db->get('lagu');
    }
    public function laguWhere($where)
    {
        return $this->db->get_where('lagu', $where);
    }

    public function simpanLagu($data = null)
    {
        return $this->db->insert('lagu', $data);
    }

    public function updateLagu($data = null, $where = null)
    {
        $this->db->update('lagu', $data, $where);
    }

    public function deleteLagu($where = null)
    {
        return $this->db->delete('lagu', $where);
    }
    public function getall_lagu_info()
    {
        $this->db->select('*');
        $this->db->from('lagu');
        $info = $this->db->get();
        return $info->result();
    }


    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('lagu');
        return $this->db->get()->row($field);
    }

    public function getLimitLagu()
    {
        $this->db->limit(10);
        return $this->db->get('lagu');
    }

    //  Genre Manajemen
    public function getGenre()
    {
        return $this->db->get('genre');
    }

    public function genreWhere($where)
    {
        return $this->db->get_where('genre', $where);
    }

    public function simpanGenre($data = null)
    {
        return $this->db->insert('genre', $data);
    }

    public function hapusGenre($where = null)
    {
        return $this->db->delete('genre', $where);
    }

    public function updateGenre($where = null, $data = null)
    {
        return $this->db->update('genre', $where, $data);
    }

    public function getMusisi()
    {
        return $this->db->get('musisi');
    }

    public function musisiWhere($where)
    {
        return $this->db->get_where('musisi', $where);
    }

    public function simpanMusisi($data = null)
    {
        return $this->db->insert('musisi', $data);
    }

    public function hapusMusisi($where = null)
    {
        return $this->db->delete('musisi', $where);
    }

    public function updateMusisi($where = null, $data = null)
    {
        return $this->db->update('musisi', $where, $data);
    }
    public function getLimitMusisi()
    {
        $this->db->limit(10);
        return $this->db->get('musisi');
    }
    public function getAlbum()
    {
        return $this->db->get('album');
    }

    public function albumWhere($where)
    {
        return $this->db->get_where('album', $where);
    }

    public function simpanAlbum($data = null)
    {
        $this->db->insert('album', $data);
    }

    public function hapusAlbum($where = null)
    {
        return $this->db->delete('album', $where);
    }

    public function updateAlbum($where = null, $data = null)
    {
        $this->db->update('album', $where, $data);
    }
    public function getLimitAlbum()
    {
        $this->db->limit(10);
        return $this->db->get('album');
    }

    //  join tables 
    public function joinGenreLagu($where)
    {
        $this->db->from('lagu');
        $this->db->join('genre', 'genre.id_genre = lagu.id_genre');
        $this->db->where($where);
        return $this->db->get();
    }
    public function joinMusisiLagu($where)
    {
        $this->db->from('lagu');
        $this->db->join('musisi', 'musisi.id_musisi = lagu.musisi');
        $this->db->where($where);
        return $this->db->get();
    }
    public function joinAlbumLagu($where)
    {
        $this->db->from('lagu');
        $this->db->join('album', 'album.id_album = lagu.album');
        $this->db->where($where);
        return $this->db->get();
    }
    public function joinAlbumMusisi($where)
    {
        $this->db->from('album');
        $this->db->join('musisi', 'musisi.musisi = album.musisi');
        $this->db->where($where);
        return $this->db->get();
    }
}