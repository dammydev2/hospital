@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif

        <div class="col-md-10" style="height:700px;overflow:auto;">
            <table id="tblData" class="table table-striped table-bordered">
                <tr>
                    <td colspan="5">
                        <a href="{{ route('patient/addpatient') }}" class="btn btn-primary">Add Patient <i class="fa fa-user-plus"></i></a>
                        <button onclick="exportTableToExcel('tblData', 'patient')" class="btn btn-warning">Excel <i class="fa fa-download"></i></button>
                        <!-- <input type="button" id="btnExport" value="PDF" class="btn btn-success" onclick="Export()" />
                        <input type="button" value="Print" class="btn btn-info" onclick="window.print()" /> -->
                    </td>
                    <td colspan="17">{{ $patient->links() }}</td>
                </tr>
                <tr>
                    <th>first name</th>
                    <th>middle name</th>
                    <th>surname</th>
                    <th>patient number</th>
                    <th>gender</th>
                    <th>address</th>
                    <th>email</th>
                    <th>telephone</th>
                    <th>domicile</th>
                    <th>nationality</th>
                    <th>occupation</th>
                    <th>date of birth</th>
                    <th>blood group</th>
                    <th>genotype</th>
                    <th>sensitivity</th>
                    <th>religion</th>
                    <th>next of kin</th>
                    <th>relationship</th>
                    <th>sex</th>
                    <th>kin address</th>
                    <th>kin email</th>
                    <th>kin phone</th>
                </tr>
                @foreach($patient as $patients)
                <tr>
                    <td> {{ $patients->first_name }} </td>
                    <td> {{ $patients->middle_name }} </td>
                    <td> {{ $patients->surname }} </td>
                    <td> {{ $patients->patient_number }} </td>
                    <td> {{ $patients->gender }} </td>
                    <td> {{ $patients->address }} </td>
                    <td> {{ $patients->email }} </td>
                    <td> {{ $patients->telephone }} </td>
                    <td> {{ $patients->domicle }} </td>
                    <td> {{ $patients->nationality }} </td>
                    <td> {{ $patients->occupation }} </td>
                    <td> {{ $patients->dob }} </td>
                    <td> {{ $patients->blood_group }} </td>
                    <td> {{ $patients->genotype }} </td>
                    <td> {{ $patients->sensitivity }} </td>
                    <td> {{ $patients->religion }} </td>
                    <td> {{ $patients->next_of_kin }} </td>
                    <td> {{ $patients->relationship }} </td>
                    <td> {{ $patients->sex }} </td>
                    <td> {{ $patients->kin_address }} </td>
                    <td> {{ $patients->kin_email }} </td>
                    <td> {{ $patients->kin_phone }} </td>
                </tr>
                @endforeach
            </table>
        </div>

    </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/excel.js') }}"></script>
<script type="text/javascript">
    function Export() {
        html2canvas(document.getElementById('tblData'), {
            onrendered: function(canvas) {
                var data = canvas.toDataURL();
                var docDefinition = {
                    content: [{
                        image: data,
                        width: 500
                    }]
                };
                pdfMake.createPdf(docDefinition).download("Patient.pdf");
            }
        });
    }
</script>
<script>
    function exportTableToExcel(tableID, filename = '') {
        var downloadLink;
        var dataType = 'application/vnd.ms-excel';
        var tableSelect = document.getElementById(tableID);
        var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

        // Specify file name
        filename = filename ? filename + '.xls' : 'excel_data.xls';

        // Create download link element
        downloadLink = document.createElement("a");

        document.body.appendChild(downloadLink);

        if (navigator.msSaveOrOpenBlob) {
            var blob = new Blob(['\ufeff', tableHTML], {
                type: dataType
            });
            navigator.msSaveOrOpenBlob(blob, filename);
        } else {
            // Create a link to the file
            downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

            // Setting the file name
            downloadLink.download = filename;

            //triggering the function
            downloadLink.click();
        }
    }
</script>
@endsection