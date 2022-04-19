<div class="col-lg-12">
    <div class="card">
        <div class="card-header">

            <h4 class="card-title">{{ $lokasi[0]->lokasi }}</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered verticle-middle table-responsive-sm table-dark">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" colspan="6">
                                <center>LOCKER</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($listlokerS as $item)
                                @if ($item->status == 'Tersedia')
                                    <td>
                                        <input type="button"
                                            onclick="addtext('<?php echo $item->kode_loker; ?>','<?php echo $item->harga; ?>','<?php echo $item->id_locker; ?>')"
                                            value="{{ str_replace('-', ' ', $item->kode_loker) }}"
                                            class="btn btn-success btn-sm"></input>
                                    </td>
                                @else
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm"
                                            disabled>{{ str_replace('-', ' ', $item->kode_loker) }}</button>
                                    </td>
                                @endif
                            @endforeach
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            @foreach ($listlokerM as $item)
                                @if ($item->status == 'Tersedia')
                                    <td>
                                        <a type="button"
                                            onclick="addtext('<?php echo $item->kode_loker; ?>','<?php echo $item->harga; ?>','<?php echo $item->id_locker; ?>')"
                                            class="btn btn-success btn-sm">{{ str_replace('-', ' ', $item->kode_loker) }}</a>
                                    </td>
                                @else
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm"
                                            disabled>{{ str_replace('-', ' ', $item->kode_loker) }}</button>
                                    </td>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            @for ($i = 0; $i <= 4; $i++)
                                @if ($listlokerL[$i]->status == 'Tersedia')
                                    <td>
                                        <a type="button"
                                            onclick="addtext('<?php echo $listlokerL[$i]->kode_loker; ?>','<?php echo $listlokerL[$i]->harga; ?>','<?php echo $listlokerL[$i]->id_locker; ?>')"
                                            class="btn btn-success">{{ str_replace('-', ' ', $listlokerL[$i]->kode_loker) }}</a>
                                    </td>
                                @else
                                    <td>
                                        <button type="button" class="btn btn-danger"
                                            disabled>{{ str_replace('-', ' ', $listlokerL[$i]->kode_loker) }}</button>
                                    </td>
                                @endif
                            @endfor
                            <td colspan="1"></td>
                        </tr>
                        <tr>
                            @for ($i = 5; $i <= 9; $i++)
                                @if ($listlokerL[$i]->status == 'Tersedia')
                                    <td>
                                        <a type="button"
                                            onclick="addtext('<?php echo $listlokerL[$i]->kode_loker; ?>','<?php echo $listlokerL[$i]->harga; ?>','<?php echo $listlokerL[$i]->id_locker; ?>')"
                                            class="btn btn-success">{{ str_replace('-', ' ', $listlokerL[$i]->kode_loker) }}</a>
                                    </td>
                                @else
                                    <td>
                                        <button type="button" class="btn btn-danger"
                                            disabled>{{ str_replace('-', ' ', $listlokerL[$i]->kode_loker) }}</button>
                                    </td>
                                @endif
                            @endfor
                            <td colspan="1"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
