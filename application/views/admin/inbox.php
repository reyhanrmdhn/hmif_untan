<style>
    .star {
        visibility: hidden;
        font-size: 25px;
        cursor: pointer;
    }

    .star:before {
        content: "\2606";
        position: absolute;
        visibility: visible;
    }

    .star:checked:before {
        content: "\2605";
        position: absolute;
    }
</style>
<div class="page-wrapper">
    <div class="email-app border-top">
        <div class="left-part bg-light">
            <a class="ti-menu ti-close btn btn-success show-left-part d-block d-md-none" href="javascript:void(0)"></a>
            <div class="scrollable" style="height:100%;">
                <div class="p-15">
                </div>
                <div class="divider"></div>
                <ul class="list-group nav nav-tabs mt-2" role="tablist">
                    <li>
                        <small class="p-15 grey-text text-lighten-1 db">Folders</small>
                    </li>
                    <li class="list-group-item nav-item">
                        <a class="nav-link active list-group-item-action" data-toggle="tab" href="#inbox" role="tab"><i class="mdi mdi-inbox"></i> Inbox <?php if ($read_num != 0) { ?> <span class="label label-success float-right"><?= $read_num; ?></span> <?php } ?></a>
                    </li>
                    <li class="list-group-item nav-item">
                        <a class="nav-link list-group-item-action" data-toggle="tab" href="#starred" role="tab"> <i class="mdi mdi-star"></i> Starred <?php if ($star_num != 0) { ?><span class="label label-warning float-right"><?= $star_num; ?></span> <?php } ?></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="tab-content">
            <div class="tab-pane active" id="inbox" role="tabpanel">
                <div class="right-part mail-list bg-white">
                    <div class="p-15 b-b">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4>Mailbox </h4>
                                <span>Here is the list of mail</span>
                                <div id="alert"></div>
                            </div>
                            <div class="ml-auto">
                                <input placeholder="Search Mail" id="" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table email-table no-wrap table-hover v-middle">
                            <tbody>
                                <?php foreach ($inbox as $ib) : ?>
                                    <tr <?php if ($ib['is_read'] == 0) { ?> class="unread" <?php } ?>>
                                        <td width="50px"><input class="star mb-4 starred" type="checkbox" <?= starred($ib['id']); ?> data-id="<?= $ib['id']; ?>"></td>
                                        <td class="user-image"><img src="<?= base_url('assets/images/profile/profil.png') ?>" alt="user" class="rounded-circle" width="30"></td>
                                        <td class="user-name max-texts">
                                            <h6 class="m-b-0">
                                                <?php if ($ib['is_read'] == 0) { ?> <span class="label label-success mr-2">New!</span> <?php } ?>
                                                <?= $ib['pengirim']; ?>
                                            </h6>
                                        </td>
                                        <td class="max-texts">
                                            <a class="link detail-<?= $ib['id'] ?> check-read" data-id="<?= $ib['id'] ?>" data-read="<?= $ib['is_read'] ?>" href="javascript: void(0)">
                                                <span class="blue-grey-text text-darken-4"><?= substr($ib['subjek'], 0, 30) ?></span>
                                            </a>
                                        </td>
                                        <td class="time">
                                            <?= date('d M Y', strtotime($ib['diterima'])); ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="p-15 m-t-30">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="starred" role="tabpanel">
                <div class="right-part mail-list bg-white">
                    <div class="p-15 b-b">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4>Starred </h4>
                                <span>Here is the list of starred mail</span>
                                <div id="alert"></div>
                            </div>
                            <div class="ml-auto">
                                <input placeholder="Search Mail" id="" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table email-table no-wrap table-hover v-middle">
                            <tbody>
                                <?php foreach ($starred as $st) : ?>
                                    <tr <?php if ($st['is_read'] == 0) { ?> class="unread" <?php } ?>>
                                        <td width="50px"><input class="star mb-4 starred" type="checkbox" <?= starred($st['id']); ?> data-id="<?= $st['id']; ?>" data-star="<?= $st['is_starred'] ?>"></td>
                                        <td class="user-image"><img src="<?= base_url('assets/images/profile/profil.png') ?>" alt="user" class="rounded-circle" width="30"></td>
                                        <td class="user-name max-texts">
                                            <h6 class="m-b-0"><?= $st['pengirim']; ?></h6>
                                        </td>
                                        <td class="max-texts"> <a class="link detail-<?= $st['id'] ?>" href="javascript: void(0)"><span class="blue-grey-text text-darken-4"><?= substr($st['subjek'], 0, 30) ?></a></td>
                                        <td class="time"> <?= date('d M Y', strtotime($st['diterima'])); ?> </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="p-15 m-t-30">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <?php foreach ($inbox as $ib) :  ?>
            <div class="right-part mail-details-<?= $ib['id'] ?> bg-white" style="display: none;">
                <div class="card-body bg-light">
                    <button type="button" id="back_to_inbox<?= $ib['id'] ?>" class="btn btn-outline-secondary font-18 m-r-10"><i class="mdi mdi-arrow-left"></i></button>
                    <div class="btn-group m-r-10" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn btn-outline-secondary font-18"><i class="mdi mdi-reply"></i></button>
                        <button type="button" class="btn btn-outline-secondary font-18"><i class="mdi mdi-alert-octagon"></i></button>
                        <button type="button" class="btn btn-outline-secondary font-18"><i class="mdi mdi-delete"></i></button>
                    </div>
                    <div class="btn-group m-r-10" role="group" aria-label="Button group with nested dropdown">
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-folder font-18 "></i> </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> </div>
                        </div>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-label font-18"></i> </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> </div>
                        </div>
                    </div>
                </div>
                <div class="card-body border-bottom">
                    <h4 class="m-b-0"><?= $ib['subjek']; ?></h4>
                </div>
                <div class="card-body border-bottom">
                    <div class="d-flex no-block align-items-center m-b-40">
                        <div class="m-r-10"><img src="<?= base_url('assets/images/profile/profil.png') ?>" alt="user" class="rounded-circle" width="45"></div>
                        <div class="">
                            <h5 class="m-b-0 font-16 font-medium"><?= $ib['pengirim']; ?> <small> ( <?= $ib['email']; ?> )</small></h5><span>to Admin</span>
                        </div>
                    </div>
                    <p><?= $ib['isi']; ?></p>
                </div>
                <!-- <div class="card-body">
                    <h4><i class="fa fa-paperclip m-r-10 m-b-10"></i> Attachments <span>(3)</span></h4>
                    <div class="row">
                        <div class="col-md-2">
                            <a href="javascript:void(0)"> <img class="img-thumbnail img-responsive" alt="attachment" src="../../assets/images/big/img1.jpg"> </a>
                        </div>
                        <div class="col-md-2">
                            <a href="javascript:void(0)"> <img class="img-thumbnail img-responsive" alt="attachment" src="../../assets/images/big/img2.jpg"> </a>
                        </div>
                        <div class="col-md-2">
                            <a href="javascript:void(0)"> <img class="img-thumbnail img-responsive" alt="attachment" src="../../assets/images/big/img3.jpg"> </a>
                        </div>
                    </div>
                    <div class="border m-t-20 p-15">
                        <p class="p-b-20">click here to <a href="javascript:void(0)">Reply</a> or <a href="javascript:void(0)">Forward</a></p>
                    </div>
                </div> -->
            </div>
        <?php endforeach; ?>
    </div>

</div>
</div>
</div>