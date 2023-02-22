//swall login
const swallog = $(".swal-log").data("swal-log");
if (swallog) {
	Swal.fire({
		icon: "error",
		title: "Oops...",
		text: "Username atau Password Anda Salah!",
	});
}

//swall log krs
const swallogkrs = $(".swal-log-krs").data("swal-log-krs");
if (swallogkrs) {
	Swal.fire({
		icon: "error",
		title: "Oops...",
		text: "Data Not Found!",
	});
}

//swall jurusan
const swal = $(".swal").data("swal");
if (swal) {
	Swal.fire({
		title: "Insert Data",
		text: "Successfully",
		icon: "success",
	});
}

const swalupdatejrs = $(".swal-update").data("swal-update");
if (swalupdatejrs) {
	Swal.fire({
		title: "Update Data",
		text: "Successfully",
		icon: "success",
	});
}

const swaldeletejrs = $(".swal-delete").data("swal-delete");
if (swaldeletejrs) {
	Swal.fire({
		title: "Are you sure?",
		text: "Data Akan Dihapus!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Yes, delete it!",
	}).then((result) => {
		if (result.isConfirmed) {
			Swal.fire("Deleted!", "Data Has Been Deleted.", "success");
		}
	});
}

//crud sweet alert prodi
const swalinsertprodi = $(".swal-prodi").data("swal-prodi");
if (swalinsertprodi) {
	Swal.fire({
		title: "Insert Data",
		text: "Successfully",
		icon: "success",
	});
}

const swalupdateprodi = $(".swal-prodi-update").data("swal-prodi-update");
if (swalupdateprodi) {
	Swal.fire({
		title: " Update Data",
		text: "Successfully",
		icon: "success",
	});
}

const swaldeleteprodi = $(".swal-delete-prodi").data("swal-delete-prodi");
if (swaldeleteprodi) {
	Swal.fire({
		title: "Are you sure?",
		text: "Data Akan Dihapus!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Yes, delete it!",
	}).then((result) => {
		if (result.isConfirmed) {
			Swal.fire("Deleted!", "Data Has Been Deleted.", "success");
		}
	});
}

//swall krs
const swalkrsinput = $(".swal-krs-input").data("swal-krs-input");
if (swalkrsinput) {
	Swal.fire({
		title: " Insert Data",
		text: "Successfully",
		icon: "success",
	});
}

const swalupdatekrs = $(".swal-update-krs").data("swal-update-krs");
if (swalupdatekrs) {
	Swal.fire({
		title: " Update Data",
		text: "Successfully",
		icon: "success",
	});
}

const swaldeletekrs = $(".swal-delete-krs").data("swal-delete-krs");
if (swaldeletekrs) {
	Swal.fire({
		title: "Are you sure?",
		text: "Data Akan Dihapus!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Yes, delete it!",
	}).then((result) => {
		if (result.isConfirmed) {
			Swal.fire("Deleted!", "Data Has Been Deleted.", "success");
		}
	});
}

//swall matakuliah
const swalmatkulinput = $(".swal-matkul-input").data("swal-matkul-input");
if (swalmatkulinput) {
	Swal.fire({
		title: "Insert Data",
		text: "Successfully",
		icon: "success",
	});
}

const swalupdatematkul = $(".swal-update-matkul").data("swal-update-matkul");
if (swalupdatematkul) {
	Swal.fire({
		title: "Update Data",
		text: "Successfully",
		icon: "success",
	});
}

const swaldeletematkul = $(".swal-delete-matkul").data("swal-delete-matkul");
if (swaldeletematkul) {
	Swal.fire({
		title: "Are you sure?",
		text: "Data Akan Dihapus!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Yes, delete it!",
	}).then((result) => {
		if (result.isConfirmed) {
			Swal.fire("Deleted!", "Data Has Been Deleted.", "success");
		}
	});
}

//sweel alert MAHASISWA
const swalmhsinput = $(".swal-mhs-input").data("swal-mhs-input");
if (swalmhsinput) {
	Swal.fire({
		title: " Insert Data",
		text: "Successfully",
		icon: "success",
	});
}

const swalupdatemhs = $(".swal-update-mhs").data("swal-update-mhs");
if (swalupdatemhs) {
	Swal.fire({
		title: " Update Data",
		text: "Successfully",
		icon: "success",
	});
}

const swaldeletemhs = $(".swal-delete-mhs").data("swal-delete-mhs");
if (swaldeletemhs) {
	Swal.fire({
		title: "Are you sure?",
		text: "Data Akan Dihapus!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Yes, delete it!",
	}).then((result) => {
		if (result.isConfirmed) {
			Swal.fire("Deleted!", "Data Has Been Deleted.", "success");
		}
	});
}

//sweel alert Tahun Akademik
const swaltainput = $(".swal-ta-input").data("swal-ta-input");
if (swaltainput) {
	Swal.fire({
		title: " Insert Data",
		text: "Successfully",
		icon: "success",
	});
}

const swalupdateta = $(".swal-update-ta").data("swal-update-ta");
if (swalupdateta) {
	Swal.fire({
		title: " Update Data",
		text: "Successfully",
		icon: "success",
	});
}

const swaldeleteta = $(".swal-delete-ta").data("swal-delete-ta");
if (swaldeleteta) {
	Swal.fire({
		title: "Are you sure?",
		text: "Data Akan Dihapus!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Yes, delete it!",
	}).then((result) => {
		if (result.isConfirmed) {
			Swal.fire("Deleted!", "Data Has Been Deleted.", "success");
		}
	});
}

//swall dosen
const swaldoseninput = $(".swal-input-dosen").data("swal-input-dosen");
if (swaldoseninput) {
	Swal.fire({
		title: "Insert Data",
		text: "Successfully",
		icon: "success",
	});
}

const swaldeletedosen = $(".swal-delete-dosen").data("swal-delete-dosen");
if (swaldeletedosen) {
	Swal.fire({
		title: "Are you sure?",
		text: "Data Akan Dihapus!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Yes, delete it!",
	}).then((result) => {
		if (result.isConfirmed) {
			Swal.fire("Deleted!", "Data Has Been Deleted.", "success");
		}
	});
}
