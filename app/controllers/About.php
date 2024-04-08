<?php
class About extends Controller
{
    public function index($nama = "Yogin Arbi Virgian", $umur = 25)
    {
        $data['nama'] = $nama;
        $data['umur'] = $umur;
        $data['title'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['title'] = 'Aboutpage';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
