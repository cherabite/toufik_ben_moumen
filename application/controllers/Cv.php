<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class Cv extends CI_Controller

{

	function __construct()

	{

		parent::__construct();

		$this->load->library('pagination');

		$this->load->helper('url');

		$this->load->library('form_validation');

		$this->load->model('cv_model', 'cv');
		$this->load->model('Batch');
	}



	function index($id = 1)

	{

		$cond = "";

		$data['searchBy'] = '';

		$data['searchValue'] = '';

		$v_fields = $this->cv->v_fields;

		$per_page_arr = array('5', '10', '20', '50', '100');



		if (isset($_GET['searchValue']) && isset($_GET['searchBy'])) {

			$data['searchBy'] = $_GET['searchBy'];

			$data['searchValue'] = $_GET['searchValue'];

			if (!empty($_GET['searchValue']) && $_GET['searchValue'] != "" && !empty($_GET['searchBy']) && $_GET['searchBy'] != "") {

				$cond = "true";
			}
		}



		$data['sortBy'] = '';

		$order_by = isset($_GET['sortBy']) && in_array($_GET['sortBy'], $v_fields) ? $_GET['sortBy'] : '';

		$order = isset($_GET['order']) && $_GET['order'] == 'asc' ? 'asc' : 'desc';

		$searchBy = isset($_GET['searchBy']) && in_array($_GET['searchBy'], $v_fields) ? $_GET['searchBy'] : null;

		$searchValue = isset($_GET['searchValue']) ? $_GET['searchValue'] : '';

		$searchValue = addslashes($searchValue);



		if (isset($_GET['sortBy']) && $_GET['sortBy'] != '') {

			$data['sortBy'] = $_GET['sortBy'];

			if (isset($_GET['order']) && $_GET['order'] != '') {

				$_GET['order'] = $_GET['order'] == 'asc' ? 'desc' : 'asc';
			} else {

				$_GET['order'] = 'desc';
			}
		}



		$get_q = $_GET;

		foreach ($v_fields as $key => $value) {

			$get_q['sortBy'] = $value;

			$query_result = http_build_query($get_q);

			$data['fields_links'][$value] = current_url() . '?' . $query_result;
		}

		$data['csvlink'] = base_url() . 'cv/export/csv';

		$data['pdflink'] = base_url() . 'cv/export/pdf';

		$data['per_page'] = isset($_GET['per_page']) && in_array($_GET['per_page'], $per_page_arr) ? $_GET['per_page'] : "5";



		// PAGINATION

		$config = array();

		$config['suffix'] = '?' . $_SERVER['QUERY_STRING'];

		$config["base_url"] = base_url() . "cv/index";

		$total_row = $this->cv->getCount('cv', $searchBy, $searchValue);

		$config["first_url"] = base_url() . "cv/index" . '?' . $_SERVER['QUERY_STRING'];

		$config["total_rows"] = $total_row;

		$config["per_page"] = $per_page = $data['per_page'];

		$config["uri_segment"] = $this->uri->total_segments();

		$config['use_page_numbers'] = TRUE;

		$config['num_links'] = 3; //$total_row

		$config['cur_tag_open'] = '&nbsp;<a class="current">';

		$config['cur_tag_close'] = '</a>';

		$config['full_tag_open'] = "<ul class='pagination'>";

		$config['full_tag_close'] = "</ul>";

		$config['num_tag_open'] = '<li>';

		$config['num_tag_close'] = '</li>';

		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";

		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";

		$config['next_tag_open'] = "<li>";

		$config['next_tagl_close'] = "</li>";

		$config['prev_tag_open'] = "<li>";

		$config['prev_tagl_close'] = "</li>";

		$config['first_link'] = 'First';

		$config['first_tag_open'] = "<li>";

		$config['first_tagl_close'] = "</li>";

		$config['last_link'] = 'Last';

		$config['last_tag_open'] = "<li>";

		$config['last_tagl_close'] = "</li>";

		$this->pagination->initialize($config);



		if ($this->uri->segment(2)) {

			$cur_page = $id;

			$pagi = array("cur_page" => ($cur_page - 1) * $per_page, "per_page" => $per_page, 'order' => $order, 'order_by' => $order_by);
		} else {

			$pagi = array("cur_page" => 0, "per_page" => $per_page);
		}



		$data["results"] = $result = $this->cv->getList("cv", $pagi);

		$str_links = $this->pagination->create_links();



		$data["links"] = $str_links;

		// ./ PAGINATION /.







		$data['cv']  = $this->cv->getList('cv');

		$this->load->view('welcome_message', $data);
	}



	public function add()

	{

		$data = NULL;
		$this->form_validation->set_rules('nom', 'Nom Name', 'required');
		/*	$this->form_validation->set_rules('prenom', 'Prenom Name', 'required|xss_clean|trim|htmlspecialchars');
		$this->form_validation->set_rules('wilaya_n', 'Wilaya_n Name', 'required|xss_clean|trim|htmlspecialchars');
		$this->form_validation->set_rules('sexe', 'Sexe Name', 'required|trim');
		$this->form_validation->set_rules('situation_fa', 'Situation_fa Name', 'required|trim');
		$this->form_validation->set_rules('nb_enfant', 'Nb_enfant Name', 'required|numeric');
		$this->form_validation->set_rules('adresse', 'Adresse Name', 'required|xss_clean|trim|htmlspecialchars');
		$this->form_validation->set_rules('tel', 'Tel Name', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email Name', 'required|valid_email');
		$this->form_validation->set_rules("image", "Image", "required|trim|xss_clean");

		/* $this->cv->uploadData($photo_data, "image", "photo_path", "", "gif|jpg|png|jpeg");

		if (isset($photo_data["photo_err"]) and !empty($photo_data["photo_err"])) {

			$data["errors"] = $photo_data["photo_err"];

			$this->form_validation->set_rules("image", "Image", "required|trim");
		}  */
		/*	$this->form_validation->set_rules('fonction_first', 'Fonction_first Name', 'required|xss_clean|trim|htmlspecialchars');
		$this->form_validation->set_rules('fonction_grade_first', 'Fonction_grade_first Name', 'required|xss_clean|trim|htmlspecialchars');
		$this->form_validation->set_rules('fonction_actuel', 'Fonction_actuel Name', 'required|xss_clean|trim|htmlspecialchars');
		$this->form_validation->set_rules('date_fonction_actuel', 'Date_fonction_actuel Name', 'required');
		$this->form_validation->set_rules('grade', 'Grade Name', 'numeric');
		$this->form_validation->set_rules('date_grade', 'Date_grade Name', 'required');
		$this->form_validation->set_rules('wilaya_fonction', 'Wilaya_fonction Name', 'required|xss_clean|trim|htmlspecialchars');
		$this->form_validation->set_rules('etablissement', 'Etablissement Name', 'required|xss_clean|trim|htmlspecialchars');
		$this->form_validation->set_rules('num_emp', 'Num_emp Name', 'required|numeric');

*/


		$data['errors'] = array();

		if ($this->form_validation->run() == FALSE) {

			echo 'error';
		} else {

			$saveData['nom'] = $this->input->post('nom');
			$saveData['prenom'] = $this->input->post('prenom');
			$saveData['wilaya_n'] = $this->input->post('wilaya_n');
			$saveData['sexe'] = $this->input->post('sexe');
			$saveData['situation_fa'] = $this->input->post('situation_fa');
			$saveData['nb_enfant'] = $this->input->post('nb_enfant');
			$saveData['adresse'] = $this->input->post('adresse');
			$saveData['tel'] = $this->input->post('tel');
			$saveData['email'] = $this->input->post('email');
			if (isset($photo_data["image"]) && !empty($photo_data["image"])) {

				$saveData["image"] = $photo_data["image"];
			}
			$saveData['fonction_first'] = $this->input->post('fonction_first');
			$saveData['fonction_grade_first'] = $this->input->post('fonction_grade_first');
			$saveData['fonction_actuel'] = $this->input->post('fonction_actuel');
			$saveData['date_fonction_actuel'] = $this->input->post('date_fonction_actuel');
			$saveData['grade'] = $this->input->post('grade');
			$saveData['date_grade'] = $this->input->post('date_grade');
			$saveData['wilaya_fonction'] = $this->input->post('wilaya_fonction');
			$saveData['etablissement'] = $this->input->post('etablissement');
			$saveData['num_emp'] = $this->input->post('num_emp');



			$count = count($_POST['count']);

			for ($i = 0; $i < $count; $i++) {

				$entries = array(
					'date' => $_POST['jdate'][$i],
					'type' => $_POST['jtype'][$i],
					'passenger' => $_POST['jpassanger'][$i],
					'from_' => $_POST['jfrom'][$i],
					'to_' => $_POST['jto'][$i],
					'ticket' => $_POST['jticket_no'][$i],
					'amount' => $_POST['jamount'][$i],
				);
				$this->Batch->batchInsert($entries);
			}



			$insert_id = $this->Batch->insert_emp($saveData);



			if ($insert_id)
				echo '1';
			else
				echo '0';
		}
	}





	function view($id)

	{



		if (!$this->ion_auth->logged_in()) {

			redirect('/auth/login/');
		}



		if (isset($id) and !empty($id)) {

			$data = NULL;



			$this->form_validation->set_rules('nom', 'Nom Name', 'required|xss_clean|trim|htmlspecialchars');
			$this->form_validation->set_rules('prenom', 'Prenom Name', 'required|xss_clean|trim|htmlspecialchars');
			$this->form_validation->set_rules('wilaya_n', 'Wilaya_n Name', 'required|xss_clean|trim|htmlspecialchars');
			$this->form_validation->set_rules('sexe', 'Sexe Name', 'trim');
			$this->form_validation->set_rules('situation_fa', 'Situation_fa Name', 'trim');
			$this->form_validation->set_rules('nb_enfant', 'Nb_enfant Name', 'required|numeric');
			$this->form_validation->set_rules('adresse', 'Adresse Name', 'required|xss_clean|trim|htmlspecialchars');
			$this->form_validation->set_rules('tel', 'Tel Name', 'numeric');
			$this->form_validation->set_rules('email', 'Email Name', 'valid_email');
			$this->form_validation->set_rules("image", "Image", "trim|xss_clean");

			$this->cv->uploadData($photo_data, "image", "photo_path", "", "gif|jpg|png|jpeg");

			if (isset($photo_data["photo_err"]) and !empty($photo_data["photo_err"])) {

				$data["errors"] = $photo_data["photo_err"];

				$this->form_validation->set_rules("image", "Image", "trim");
			}
			$this->form_validation->set_rules('fonction_first', 'Fonction_first Name', 'required|xss_clean|trim|htmlspecialchars');
			$this->form_validation->set_rules('fonction_grade_first', 'Fonction_grade_first Name', 'required|xss_clean|trim|htmlspecialchars');
			$this->form_validation->set_rules('fonction_actuel', 'Fonction_actuel Name', 'required|xss_clean|trim|htmlspecialchars');
			$this->form_validation->set_rules('date_fonction_actuel', 'Date_fonction_actuel Name', 'required');
			$this->form_validation->set_rules('grade', 'Grade Name', 'numeric');
			$this->form_validation->set_rules('date_grade', 'Date_grade Name', 'required');
			$this->form_validation->set_rules('wilaya_fonction', 'Wilaya_fonction Name', 'required|xss_clean|trim|htmlspecialchars');
			$this->form_validation->set_rules('etablissement', 'Etablissement Name', 'required|xss_clean|trim|htmlspecialchars');
			$this->form_validation->set_rules('num_emp', 'Num_emp Name', 'required|numeric');




			$data['errors'] = array();

			if ($this->form_validation->run() == FALSE) {







				$data['cv'] = $this->cv->getRow('cv', $id);

				$this->load->view('cv/view', $data);
			} else {

				redirect('cv/view');
			}
		} else {

			$this->session->set_flashdata('message', ' Invalid Id !');

			redirect('cv/view');
		}
	}



	function edit($id)

	{

		if (!$this->ion_auth->logged_in()) {

			redirect('/auth/login/');
		}



		if (isset($id) and !empty($id)) {

			$data = NULL;



			$this->form_validation->set_rules('nom', 'Nom Name', 'required|xss_clean|trim|htmlspecialchars');
			$this->form_validation->set_rules('prenom', 'Prenom Name', 'required|xss_clean|trim|htmlspecialchars');
			$this->form_validation->set_rules('wilaya_n', 'Wilaya_n Name', 'required|xss_clean|trim|htmlspecialchars');
			$this->form_validation->set_rules('sexe', 'Sexe Name', 'trim');
			$this->form_validation->set_rules('situation_fa', 'Situation_fa Name', 'trim');
			$this->form_validation->set_rules('nb_enfant', 'Nb_enfant Name', 'required|numeric');
			$this->form_validation->set_rules('adresse', 'Adresse Name', 'required|xss_clean|trim|htmlspecialchars');
			$this->form_validation->set_rules('tel', 'Tel Name', 'numeric');
			$this->form_validation->set_rules('email', 'Email Name', 'valid_email');
			$this->form_validation->set_rules("image", "Image", "trim|xss_clean");

			$this->cv->uploadData($photo_data, "image", "photo_path", "", "gif|jpg|png|jpeg");

			if (isset($photo_data["photo_err"]) and !empty($photo_data["photo_err"])) {

				$data["errors"] = $photo_data["photo_err"];

				$this->form_validation->set_rules("image", "Image", "trim");
			}
			$this->form_validation->set_rules('fonction_first', 'Fonction_first Name', 'required|xss_clean|trim|htmlspecialchars');
			$this->form_validation->set_rules('fonction_grade_first', 'Fonction_grade_first Name', 'required|xss_clean|trim|htmlspecialchars');
			$this->form_validation->set_rules('fonction_actuel', 'Fonction_actuel Name', 'required|xss_clean|trim|htmlspecialchars');
			$this->form_validation->set_rules('date_fonction_actuel', 'Date_fonction_actuel Name', 'required');
			$this->form_validation->set_rules('grade', 'Grade Name', 'numeric');
			$this->form_validation->set_rules('date_grade', 'Date_grade Name', 'required');
			$this->form_validation->set_rules('wilaya_fonction', 'Wilaya_fonction Name', 'required|xss_clean|trim|htmlspecialchars');
			$this->form_validation->set_rules('etablissement', 'Etablissement Name', 'required|xss_clean|trim|htmlspecialchars');
			$this->form_validation->set_rules('num_emp', 'Num_emp Name', 'required|numeric');




			$data['errors'] = array();

			if ($this->form_validation->run() == FALSE) {





				$data['cv'] = $this->cv->getRow('cv', $id);



				$this->load->view('cv/edit', $data);
			} else {

				$saveData['nom'] = set_value('nom');
				$saveData['prenom'] = set_value('prenom');
				$saveData['wilaya_n'] = set_value('wilaya_n');
				$saveData['sexe'] = set_value('sexe');
				$saveData['situation_fa'] = set_value('situation_fa');
				$saveData['nb_enfant'] = set_value('nb_enfant');
				$saveData['adresse'] = set_value('adresse');
				$saveData['tel'] = set_value('tel');
				$saveData['email'] = set_value('email');
				if (isset($photo_data["image"]) && !empty($photo_data["image"])) {

					$saveData["image"] = $photo_data["image"];
				}
				$saveData['fonction_first'] = set_value('fonction_first');
				$saveData['fonction_grade_first'] = set_value('fonction_grade_first');
				$saveData['fonction_actuel'] = set_value('fonction_actuel');
				$saveData['date_fonction_actuel'] = set_value('date_fonction_actuel');
				$saveData['grade'] = set_value('grade');
				$saveData['date_grade'] = set_value('date_grade');
				$saveData['wilaya_fonction'] = set_value('wilaya_fonction');
				$saveData['etablissement'] = set_value('etablissement');
				$saveData['num_emp'] = set_value('num_emp');


				$this->cv->updateData('cv', $saveData, $id);



				$this->session->set_flashdata('message', 'Cv Updated Successfully!');

				redirect('cv');
			}
		} else {

			$this->session->set_flashdata('message', ' Invalid Id !');

			redirect('cv');
		}
	}



	function delete($id = '')

	{

		if (!$this->ion_auth->logged_in()) {

			redirect('/auth/login/');
		}



		if (isset($id) and !empty($id)) {

			$count = $this->cv->getCount('cv', 'cv.id', $id);

			if (isset($count) and !empty($count)) {

				$this->cv->delete('cv', 'id', $id);

				$this->session->set_flashdata('message', ' Cv Deleted Successfully !');

				echo "success";

				exit;
			} else {

				$this->session->set_flashdata('message', ' Invalid Id !');
			}
		} else {

			$this->session->set_flashdata('message', ' Invalid Id !');
		}
	}



	function deleteAll($id = '')

	{



		if (!$this->ion_auth->logged_in()) {

			redirect('/auth/login/');
		}



		$all_ids = $_POST["allIds"];



		if (isset($all_ids) and !empty($all_ids)) {



			//$count=$this->cv->getCount('cv','cv.id',$id);

			for ($a = 0; $a < count($all_ids); $a++) {

				if ($all_ids[$a] != "") {

					$this->cv->delete('cv', 'id', $all_ids[$a]);

					$this->session->set_flashdata('message', ' Cv(s) Deleted Successfully !');
				}
			}



			echo "success";

			exit;
		} else {

			$this->session->set_flashdata('message', ' Invalid Id !');
		}
	}



	function export($filetype = 'csv')
	{



		if (!$this->ion_auth->logged_in()) {

			redirect('/auth/login/');
		}



		$searchBy = '';

		$searchValue = '';

		$v_fields = array('nom', 'prenom', 'wilaya_n', 'sexe', 'situation_fa', 'nb_enfant', 'adresse', 'tel', 'email', 'image', 'fonction_first', 'fonction_grade_first', 'fonction_actuel', 'date_fonction_actuel', 'grade', 'date_grade', 'wilaya_fonction', 'etablissement', 'num_emp');



		$data['sortBy'] = '';



		$order_by = isset($_GET['sortBy']) && in_array($_GET['sortBy'], $v_fields) ? $_GET['sortBy'] : '';

		$order = isset($_GET['order']) && $_GET['order'] == 'asc' ? 'asc' : 'desc';



		$searchBy = isset($_GET['searchBy']) && in_array($_GET['searchBy'], $v_fields) ? $_GET['searchBy'] : null;

		$searchValue = isset($_GET['searchValue']) ? $_GET['searchValue'] : '';

		$searchValue = addslashes($searchValue);

		$pagi = array('order' => $order, 'order_by' => $order_by);



		$result = $this->cv->getList("cv");



		if ($filetype == 'csv') {

			header('Content-Type: application/csv');

			header('Content-Disposition: attachment; filename=cv.csv');

			header('Pragma: no-cache');

			$csv = 'Sr. No,' . implode(',', $v_fields) . "\n";

			foreach ($result as $key => $value) {

				$line = ($key + 1) . ',';

				foreach ($v_fields as $field) {

					$line .= '"' . addslashes($value->$field) . '"' . ',';
				}

				$csv .= ltrim($line, ',') . "\n";
			}

			echo $csv;
			exit;
		} elseif ($filetype == 'pdf') {

			error_reporting(0);

			ob_start();

			$this->load->library('m_pdf');

			$table = '

			<html>

			<head><title></title>

			<style>

			table{

				border:1px solid;

			}

			tr:nth-child(even)

			{

			    background-color: rgba(158, 158, 158, 0.82);

			}

			</style>

			</head>

			<body>

			<h1 align="center">Cv</h1>

			<table><tr>';

			$table .= '<th>Sr. No</th>';

			foreach ($v_fields as $value) {

				$table .= '<th>' . $value . '</th>';
			}

			$table .= '</tr>';

			foreach ($result as $key => $value) {

				$table .= '<tr><td>' . ($key + 1) . '</td>';

				foreach ($v_fields as $field) {

					$table .= '<td>' . $value->$field . '</td>';
				}

				$table .= '</tr>';
			}

			$table .= '</table></body></html>';

			ob_clean();

			$pdf = $this->m_pdf->load();

			$pdf->WriteHTML($table);

			$pdf->Output('cv.pdf', "D");

			exit;
		} else {

			echo 'Invalid option';
			exit;
		}
	}





	function status($field, $id)

	{

		if (!$this->ion_auth->logged_in()) {

			redirect('/auth/login/');
		}



		if (in_array($field, array())) {

			if (isset($id) && !empty($id)) {

				if (!is_null($cv = $this->cv->getRow('cv', $id))) {

					$status = $cv->$field;

					if ($status == 1) {

						$status = 0;
					} else {

						$status = 1;
					}

					$statusData[$field] = $status;

					$this->cv->updateData('cv', $statusData, $id);

					$this->session->set_flashdata('message', ucfirst($field) . ' Updated Successfully');

					if (isset($_GET['redirect']) && $_GET['redirect'] != '') {

						redirect($_GET['redirect']);
					} else {

						redirect('cv');
					}
				} else {

					$this->session->set_flashdata('error', 'Invalid Record Id!');

					redirect('cv');
				}
			} else {

				$this->session->set_flashdata('error', 'Invalid Record Id!');

				redirect('cv');
			}
		}
	}
}