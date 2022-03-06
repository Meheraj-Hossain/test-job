function deleteCategory(id) {
    const swalWithBootstrapButtons = Swal.mixin({
        
    })

    swalWithBootstrapButtons.fire({
        title: 'আপনি কি নিশ্চিত?',
        text: "আপনি এটিকে আর ফিরিয়ে আনতে পারবেন না!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'হ্যা ডিলিট করুন!',
        cancelButtonText: 'না বাতিল করুন!',
        reverseButtons: true
    }).then((result) => {
        if (result.value) {
            event.preventDefault();
            document.getElementById('delete-form-' + id).submit();
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
                'বাতিল করা হয়েছে',
                'আপনার ডেটা নিরাপদ 🙂',
                'error'
            )
        }
    })
}