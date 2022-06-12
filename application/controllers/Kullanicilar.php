<?php

class Kullanicilar extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->viewFolder = "kullanicilar_v";
        $this->load->model("Kullanicilar_Model");
    }


    public function index()
    {
        /* Tablodan verilerin getirilmesi */
        $items = $this->Kullanicilar_Model->get_all();
        
        /* Verinin incelenmesi */
        //print_r($items);

        /* View yapısının kurulması */

        $viewData = new stdClass();

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subviewFolder = "list";
        $viewData->items = $items;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subviewFolder}/index", $viewData);
    }

    public function newForm()
    {
        
        /* View yapısının kurulması */
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subviewFolder = "add";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subviewFolder}/index", $viewData);
    }

    public function insert()
    {

        $data = array(
            "adi"       => $this->input->post("adi"),
            "soyadi"    => $this->input->post("soyadi"),
            "email"     => $this->input->post("email"),
            "telefon"   => $this->input->post("telefon")

        );
        
        $add = $this->Kullanicilar_Model->insert($data);

        if ($add) {
            redirect(base_url("kullanicilar"));
        }
    }

    public function updateForm($id)
    {
        $item = $this->Kullanicilar_Model->get(array(
            "id" => $id
        ));

        /* View yapısının kurulması */
        $viewData = new stdClass();
        $viewData->item = $item;
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subviewFolder = "update";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subviewFolder}/index", $viewData);
    }

    public function update()
    {
        $data = array(
            "adi"       => $this->input->post("adi"),
            "soyadi"    => $this->input->post("soyadi"),
            "email"     => $this->input->post("email"),
            "telefon"   => $this->input->post("telefon")
        );

        $update = $this->Kullanicilar_Model->update(array(
            "id" => $this->input->post("id")
        ), $data);

        if ($update) {
            
            redirect(base_url("kullanicilar"));

        } else{

            echo "Güncelleme işlemi başarısız oldu.";

        };
    }


    public function delete($id)
    {
        $delete = $this->Kullanicilar_Model->delete(array(
            "id" => $id
        ));
        if ($delete) {

            redirect(base_url("kullanicilar"));

        } else {
            echo "Silinemedi";
        }
    }


    public function isActiveSetter($id)
    {
        $isActive = ($this->input->post("isActive") == "true") ? 1 : 0;
        $this->Kullanicilar_Model->update(
            array(
                "id" => $id
            ),
            array(
                "isActive" => $isActive
            )
        );
    }
}
