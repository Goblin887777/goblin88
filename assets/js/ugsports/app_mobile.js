!function() {
    var e = {  
        8855: function() {
            function e() {
                return $(".btn-refresh-wallet").prop("disabled", !0),
                $(".bal-txt").text(""),
                $("#mainwallet_amount").val(""),
                $("#maxSliderApk").text(""),
                $(".bal-txt").addClass("loader"),
                json_get("/getBal").done((function(e) {
                    $(".bal-txt").removeClass("loader"),
                    $(".bal-txt").text(e.data),
                    $("#mainwallet_amount").attr("value", e.data),
                    $("#mainwallet_amount").val(e.data),
                    $("#maxSliderApk").text(e.data),
                    mainwallet = $("#mainwallet_amount").val(),
                    $(".btn-refresh-wallet").prop("disabled", !1)
                }
                )).fail((function() {
                    $(".bal-txt").removeClass("loader"),
                    $(".btn-refresh-wallet").prop("disabled", !1)
                }
                )),
                !1
            }
            $(document).on("click", ".btn-refresh-wallet", (function() {
                var e = this;
                return $(this).prop("disabled", !0),
                $(".bal-txt").text(""),
                $("#mainwallet_amount").val(""),
                $("#maxSliderApk").text(""),
                $(".bal-txt").addClass("loader"),
                json_get("/getBal").done((function(t) {
                    $(".bal-txt").removeClass("loader"),
                    $(".bal-txt").text(t.data),
                    $("#mainwallet_amount").attr("value", t.data),
                    $("#mainwallet_amount").val(t.data),
                    $("#maxSliderApk").text(t.data),
                    mainwallet = $("#mainwallet_amount").val(),
                    $(e).prop("disabled", !1)
                }
                )).fail((function() {
                    $(".bal-txt").removeClass("loader"),
                    $(e).prop("disabled", !1)
                }
                )),
                !1
            }
            )),
            $(document).on("click", ".btn-refresh-wallet-ref", (function() {
                var e = this;
                return $(this).prop("disabled", !0),
                $(".bal-ref-txt").text(""),
                $(".bal-ref-txt").addClass("loader"),
                json_get("/getRefWalletBal").done((function(t) {
                    $(".bal-ref-txt").removeClass("loader"),
                    $(".bal-ref-txt").text(t.data),
                    $(e).prop("disabled", !1)
                }
                )).fail((function() {
                    $(".bal-ref-txt").removeClass("loader"),
                    $(e).prop("disabled", !1)
                }
                )),
                !1
            }
            )),
            $(document).on("click", ".btn-refresh-IDN", (function(e) {
                return e.isSys || $("#other-game-bals button").prop("disabled", !0),
                $(".bal-IDN").text(""),
                json_get("/ajaxIDNBal").done((function(e) {
                    $(".bal-IDN").text(e.data),
                    $("#other-game-bals button").prop("disabled", !1)
                }
                )).fail((function() {
                    $("#other-game-bals button").prop("disabled", !1)
                }
                )),
                !1
            }
            )),
            $(document).on("click", ".btn-refresh-hkb", (function(e) {
                return e.isSys || $("#other-game-bals button").prop("disabled", !0),
                $(".bal-hkb").text(""),
                json_get("/ajaxHKBBal").done((function(e) {
                    console.log(e.data),
                    $(".bal-hkb").text(e.data),
                    $("#other-game-bals button").prop("disabled", !1)
                }
                )).fail((function() {
                    $("#other-game-bals button").prop("disabled", !1)
                }
                )),
                !1
            }
            )),
            $(document).on("click", ".btn-refresh-CMD", (function(e) {
                return e.isSys || $("#other-game-bals button").prop("disabled", !0),
                $(".bal-CMD").text(""),
                json_get("/ajaxCMDBal").done((function(e) {
                    $(".bal-CMD").text(e.data),
                    $("#other-game-bals button").prop("disabled", !1)
                }
                )).fail((function() {
                    $("#other-game-bals button").prop("disabled", !1)
                }
                )),
                !1
            }
            )),
            $(".js-btn-lottery-more").on("click", (function() {
                $(this).prop("disabled", !0);
                var e = this
                  , t = $(this).data("name")
                  , n = $(this).data("dtrange")
                  , a = $(this).data("code");
                xhr_get("/getHKGPLotteryDetails?date_range=" + n + "&game_name=" + t + "&game_code=" + a).done((function(e) {
                    $("#js-modal-lottery-details").html(e),
                    $(".nifty-modal", "#js-modal-lottery-details").nifty("show")
                }
                )).always((function() {
                    $(e).prop("disabled", !1)
                }
                ))
            }
            )),
            $(document).on("click", ".btn-refresh-PT", (function(e) {
                return e.isSys || $("#other-game-bals button").prop("disabled", !0),
                $(".bal-PT").text(""),
                json_get("/ajaxPTBal").done((function(e) {
                    $(".bal-PT").text(e.data),
                    $("#other-game-bals button").prop("disabled", !1)
                }
                )).fail((function() {
                    $("#other-game-bals button").prop("disabled", !1)
                }
                )),
                !1
            }
            )),
            $(document).on("click", ".btn-refresh-918kiss", (function(e) {
                return e.isSys || $("#other-game-bals button").prop("disabled", !0),
                $(".bal-918kiss").text(""),
                json_get("/ajax918kissBal").done((function(e) {
                    $(".bal-918kiss").text(e.data),
                    $("#other-game-bals button").prop("disabled", !1)
                }
                )).fail((function() {
                    $("#other-game-bals button").prop("disabled", !1)
                }
                )),
                !1
            }
            )),
            $(document).on("click", ".btn-refresh-pussy888", (function(e) {
                return e.isSys || $("#other-game-bals button").prop("disabled", !0),
                $(".bal-918kiss").text(""),
                json_get("/ajaxPussy888Bal").done((function(e) {
                    $(".bal-pussy888").text(e.data),
                    $("#other-game-bals button").prop("disabled", !1)
                }
                )).fail((function() {
                    $("#other-game-bals button").prop("disabled", !1)
                }
                )),
                !1
            }
            )),
            $(document).on("click", ".btn-tran-IDN", (function() {
                var t = $(".bal-IDN").text();
                if (0 == (t = window.convertToNumber(t)))
                    return sweetAlert(transMsgs.transFailedAmt0);
                $("#other-game-bals button").prop("disabled", !0);
                var n = {
                    amt: t
                };
                return $(".bal-IDN").text(""),
                json_post("/ajaxIDNTran", n).done((function(t) {
                    return $(".bal-IDN").text(t.data),
                    $("#other-game-bals button").prop("disabled", !1),
                    e(),
                    sweetAlert(transMsgs.transferSuccess, "success", "Success")
                }
                )).fail((function() {
                    $("#other-game-bals button").prop("disabled", !1)
                }
                )),
                !1
            }
            )),
            $(document).on("click", ".btn-tran-hkb", (function() {
                var t = $("#bal-hkb").text();
                if (0 == (t = window.convertToNumber(t)))
                    return sweetAlert(transMsgs.transFailedAmt0);
                $("#other-game-bals button").prop("disabled", !0),
                $(".btn-tran-hkb").prop("disabled", !0);
                var n = {
                    amt: t
                };
                return $(".bal-hkb").text(""),
                json_post("/ajaxHKBTran", n).done((function(t) {
                    $(".bal-hkb").text(t.data.hkbWallet),
                    e(),
                    sweetAlert(transMsgs.transferSuccess, "success", "Success")
                }
                )).fail((function() {}
                )).always((function() {
                    $("#other-game-bals button").prop("disabled", !1),
                    $(".btn-tran-hkb").prop("disabled", !1)
                }
                )),
                !1
            }
            )),
            $(document).on("click", ".btn-tran-CMD", (function() {
                var t = $(".bal-CMD").text();
                if (0 == (t = window.convertToNumber(t)))
                    return sweetAlert(transMsgs.transFailedAmt0);
                $("#other-game-bals button").prop("disabled", !0);
                var n = {
                    amt: t
                };
                return $(".bal-CMD").text(""),
                json_post("/ajaxCMDTran", n).done((function(t) {
                    return $(".bal-CMD").text(t.data),
                    $("#other-game-bals button").prop("disabled", !1),
                    e(),
                    sweetAlert(transMsgs.transferSuccess, "success", "Success")
                }
                )).fail((function() {
                    $("#other-game-bals button").prop("disabled", !1)
                }
                )),
                !1
            }
            )),
            $(document).on("click", ".btn-tran-PT", (function() {
                var t = $(".bal-PT").text();
                if (0 == (t = window.convertToNumber(t)))
                    return sweetAlert(transMsgs.transFailedAmt0);
                $("#other-game-bals button").prop("disabled", !0);
                var n = {
                    amt: t
                };
                return $(".bal-PT").text(""),
                json_post("/ajaxPTTran", n).done((function(t) {
                    return $(".bal-PT").text(t.data),
                    $("#other-game-bals button").prop("disabled", !1),
                    e(),
                    sweetAlert(transMsgs.transferSuccess, "success", "Success")
                }
                )).fail((function() {
                    $("#other-game-bals button").prop("disabled", !1)
                }
                )),
                !1
            }
            )),
            $(document).on("click", ".btn-tran-918kiss", (function() {
                var t = $(".bal-918kiss").text();
                if (0 == (t = window.convertToNumber(t)))
                    return sweetAlert(transMsgs.transFailedAmt0);
                $("#other-game-bals button").prop("disabled", !0);
                var n = {
                    amt: t
                };
                return $(".bal-918kiss").text(""),
                json_post("/ajax918kissTran", n).done((function(t) {
                    return $(".game-bals .btn-refresh-918kiss").trigger("click"),
                    $("#other-game-bals button").prop("disabled", !1),
                    e(),
                    sweetAlert(transMsgs.transferSuccess, "success", "Success")
                }
                )).fail((function() {
                    $("#other-game-bals button").prop("disabled", !1)
                }
                )),
                !1
            }
            )),
            $(document).on("click", ".btn-tran-pussy888", (function() {
                var t = $(".bal-pussy888").text();
                if (0 == (t = window.convertToNumber(t)))
                    return sweetAlert(transMsgs.transFailedAmt0);
                $("#other-game-bals button").prop("disabled", !0);
                var n = {
                    amt: t
                };
                return $(".bal-pussy888").text(""),
                json_post("/ajaxPussy888Tran", n).done((function(t) {
                    return $(".game-bals .btn-refresh-pussy888").trigger("click"),
                    $("#other-game-bals button").prop("disabled", !1),
                    e(),
                    sweetAlert(transMsgs.transferSuccess, "success", "Success")
                }
                )).fail((function() {
                    $("#other-game-bals button").prop("disabled", !1)
                }
                )),
                !1
            }
            )),
            window.ajaxLoginForm = function() {
                json_get("/ajaxCSRFToken", showLoadingImgFn, removeLoadingImgFn).done((function(e) {
                    $("#sec_token--loginForm").val(e.data)
                }
                ))
            }
            ,
            window.update_memo_status = function(e, t, n) {
                json_post("/update-memo-status", {
                    type: e,
                    msg_id: t,
                    mode: n
                }).done((function(e) {
                    Swal.fire("Warning", e.m, "success").then((function() {
                        location.reload()
                    }
                    ))
                }
                )).fail((function() {
                    return !1
                }
                ))
            }
            ,
            window.ajaxResetPwdForm = function() {
                json_get("/ajaxCSRFToken", showLoadingImgFn, removeLoadingImgFn).done((function(e) {
                    $("#sec_token--resetPwdForm").val(e.data)
                }
                ))
            }
            ,
            window.getAllGameBal = function() {
                window.isAuth && ($(".game-bals .btn-refresh-PT").click(),
                $(".btn-refresh-PT").click(),
                $("#other-game-bals button").prop("disabled", !1),
                $(".game-bals .btn-refresh-CMD").click(),
                $(".btn-refresh-CMD").click(),
                $("#other-game-bals button").prop("disabled", !1),
                "IDR" == window.currencyCode && ($(" .btn-refresh-IDN").click(),
                $(" .btn-refresh-hkb").click()),
                "MYR" != window.currencyCode && "THB" != window.currencyCode || ($(".btn-refresh-918kiss").click(),
                $("#other-game-bals button").prop("disabled", !1),
                $(".game-bals .btn-refresh-pussy888").click()))
            }
            ,
            $(document).on("click", ".btn-notifications", (function() {
                return json_get("/api/ajaxGetNotifications", showLoadingImgFn, removeLoadingImgFn).done((function(e) {
                    var t = "";
                    $.each(e.data, (function(e, n) {
                        t += "<li><p>" + n.created_at + "</p><p>" + n.description + "</p>"
                    }
                    )),
                    $(".noti_list").html(t)
                }
                )).fail((function() {
                    return !1
                }
                )),
                !1
            }
            )),
            window.check_notification_status = function() {
                if (!window.isAuth)
                    return !1;
                json_get("/api/ajaxCheckMsgs", null, null).done((function(e) {
                    if (!e)
                        return !1;
                    var t = e.inboxCnt
                      , n = (e.notiCnt,
                    e.memoblinkstate);
                    return t > 0 && n ? ($(".mail_icon, .txt_mail_cnt").text(t),
                    $(".mail_icon").toggle(!0)) : ($(".mail_icon").toggle(!1),
                    $(".mail_icon, .txt_mail_cnt").text(0)),
                    !0
                }
                )).fail((function() {
                    return !1
                }
                ))
            }
            ,
            $(document).ready((function() {
                var t, n, a, o, i, r = 5;
                "THB" == window.currencyCode && (r = 20),
                r = $("#twminval").val(),
                r = parseInt(r),
                window.tw_information = function() {
                    a = $("#mainwallet_amount").val(),
                    console.log("mainwallet", a),
                    parseInt(a);
                    var e = new RegExp(window.currencyCode + "|,","gi");
                    t = a.replace(e, ""),
                    n = parseInt(t),
                    o = (o = $("#transfer_amount").val()).replace(/,/g, ""),
                    i = parseInt(o),
                    parseInt(i);
                    $("#slider").slider({
                        value: 0,
                        orientation: "horizontal",
                        range: "min",
                        min: 0,
                        max: n,
                        animate: !0,
                        step: r,
                        change: function(e, n) {
                            $("#transfer_amount").val(n.value.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",")),
                            console.log(),
                            $("#mainwallet_amount").val((t - n.value).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ","))
                        }
                    })
                }
                ,
                $("#tw_increase_btn").click((function() {
                    var e = $("#slider").slider("option", "value")
                      , t = $("#mainwallet_amount").val();
                    t = t.replace(/,/g, ""),
                    (t = parseInt(t)) >= r && ($("#slider").slider("value", e + r),
                    $("#transfer_amount").val((e + r).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",")))
                }
                )),
                $("#tw_decrease_btn").click((function() {
                    var e = $("#slider").slider("option", "value");
                    currentTranAmt = $("#transfer_amount").val(),
                    currentTranAmt <= r ? $("#slider").slider("option", "value", 0) : ($("#slider").slider("value", e - r),
                    $("#transfer_amount").val((e - r).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",")))
                }
                )),
                $("#slider").on("slide", (function(e, n) {
                    $("#transfer_amount").val(n.value.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",")),
                    $("#mainwallet_amount").val((t - n.value).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ","));
                    var a = ($("#transfer_amount").val() || "").replace(/\,/g, "");
                    $("#transfer_amount").val(a)
                }
                )),
                $("#widget").draggable(),
                $("#tw_transfer_form").validate({
                    rules: {
                        transfer_amount: {
                            required: !0
                        }
                    },
                    messages: {
                        new_password: {
                            required: "please enter the amount to transfer"
                        }
                    },
                    errorElement: "em",
                    errorPlacement: function(e, t) {
                        e.addClass("help-block"),
                        t.addClass("has-feedback"),
                        "checkbox" === t.prop("type") ? e.insertAfter(t.parent("label")) : e.insertAfter(t),
                        t.next("i")[0] || $("<i class='icon-cancel form-control-feedback absolute'></i>").insertAfter(t)
                    },
                    success: function(e, t) {
                        $(t).next("i")[0] || $("<i class='icon-checkmark  form-control-feedback absolute'></i>").insertAfter($(t))
                    },
                    highlight: function(e, t, n) {
                        $(e).addClass("has-error").removeClass("has-success"),
                        $(e).next("i").addClass("icon-cancel").removeClass("icon-checkmark")
                    },
                    unhighlight: function(e, t, n) {
                        $(e).addClass("has-success").removeClass("has-error"),
                        $(e).next("i").addClass("icon-checkmark").removeClass("icon-cancel")
                    },
                    submitHandler: function(t, n) {
                        $("input[type=submit]").prop("disabled", !0);
                        var a = "#" + t.id;
                        $(a + " input[type=submit]").prop("disabled", !0);
                        var o = $(t).attr("action")
                          , i = $(t).serialize();
                        return json_post(o, i).done((function(n) {
                            $(t).each((function() {
                                this.reset()
                            }
                            )),
                            $(t).validate().resetForm(),
                            e(),
                            $(a + " input[type=submit], .btn-primary").prop("disabled", !1),
                            sweetAlert(window.currencyCode + " " + window.commaSeparateNumber(n.data.amount) + " " + transMsgs.walletTranserSuccess, "success", "success").then((function() {
                                window.tw_information(),
                                window.open(launchurl, "_blank")
                            }
                            ))
                        }
                        )).always((function() {
                            return $(a + " input[type=submit], .btn-primary").prop("disabled", !1),
                            $("#slider").slider("option", "value", 0),
                            !1
                        }
                        )),
                        !1
                    }
                })
            }
            ))
        },
7438: function() {
            !function(e) {
                // Biarkan halaman stabil dulu selama 2 detik sebelum polisi aktif
                var halamanSiap = false;
                setTimeout(function() { halamanSiap = true; }, 2000);

                function polisiNotif(obj) {
                    // 1. JANGAN MUNCUL kalau halaman baru dimuat (cegah notif pas pindah halaman)
                    // 2. JANGAN MUNCUL kalau status 0 (koneksi putus/abort)
                    if (!halamanSiap || obj.status === 0 || obj.statusText === 'abort') {
                        return; 
                    }

                    var m = "";
                    if (obj.responseJSON && obj.responseJSON.message) {
                        m = obj.responseJSON.message;
                    } else {
                        m = obj.responseText || "";
                    }
                    
                    // Kalau pesan kosong atau cuma spasi, diam saja
                    if (!m || m.trim().length === 0) return;

                    // FILTER: Saring jika ada tag HTML atau pesan terlalu panjang
                    if (/<html|<div|<title|<!DOCTYPE/i.test(m) || m.length > 500) {
                        m = "Terjadi gangguan koneksi, silakan coba lagi.";
                    }
                    
                    sweetAlert(m);
                }

                window.showLoadingImgFn = function() { 
                    if(e("#loading--layout").length) e("#loading--layout").nifty("show") 
                },
                window.removeLoadingImgFn = function() { 
                    if(e("#loading--layout").length) e("#loading--layout").nifty("hide") 
                },
                
                // xhr_get: Khusus Profil (Dibuat paling longgar agar profil pasti muncul)
                window.xhr_get = function(t, n, a) {
                    return e.ajax({
                        url: t, method: "GET",
                        beforeSend: function() { n && n() }
                    }).always(function() { a && a() });
                },

                window.json_get = function(t, n, a) {
                    return e.ajax({
                        url: t, method: "GET", dataType: "json",
                        beforeSend: function() { n && n() }
                    }).always(function() { a && a() }).fail(function(err) { 
                        polisiNotif(err); 
                    });
                },

                window.json_post = function(t, n, a, o) {
                    return e.ajax({
                        url: t, method: "POST", data: n, dataType: "json",
                        beforeSend: function() { a ? a() : showLoadingImgFn() }
                    }).always(function() { o ? o() : removeLoadingImgFn() }).fail(function(err) {
                        polisiNotif(err);
                    });
                },

                window.ajax_submit = function(t) {
                    return e.ajax({
                        url: e(t).attr("action"), method: "POST", data: new FormData(t),
                        processData: !1, contentType: !1, dataType: "json",
                        beforeSend: showLoadingImgFn
                    }).always(function() {
                        removeLoadingImgFn(),
                        e(t).find('button[type="submit"]').prop("disabled", !1)
                    }).fail(function(err) {
                        polisiNotif(err);
                    });
                },

                e.ajaxSetup({
                    headers: { "X-CSRF-TOKEN": e('meta[name="csrf-token"]').attr("content") }
                })
            }(jQuery)
        },
        4853: function() {
            // Tutup popup
            $(document).on("click", "#bank_deposit_confirm, #pulsa_add_cancel", function() {
                $("#regbank_popup__depo").nifty("hide");
                $("#btn_add_ubank__depo").prop("disabled", !1);
                return !1;
            });

            // Fungsi validasi (Kembali ke struktur asli agar Profil muncul)
            window.bindBankRegFormVal = function(formId, mode) {
                var targetMode = mode || "";
                $(formId).validate({
                    rules: {
                        acc_name: { required: !0, minlength: 3 },
                        acc_no: { required: !0, digits: !0 },
                        new_bank: { required: !0 }
                    },
                    submitHandler: function(form) {
                        $("button[type=submit]").prop("disabled", !0);
                        json_post("/add-user-bank", $(form).serialize()).done(function(res) {
                            sweetAlert(res.m, "success", "Berhasil");
                            $("#regbank_popup__depo").nifty("hide");
                            
                            if (targetMode == "bounus_add_bank") {
                                location.reload();
                            } else {
                                // Update list bank secara manual (Cara paling aman)
                                var $list = $("select#bank_user_id");
                                $list.html('<option value="">-- Pilih Bank --</option>');
                                if(res.data) {
                                    for(var i=0; i < res.data.length; i++) {
                                        $list.append('<option value="'+res.data[i].id+'" data-method="'+res.data[i].method+'">'+res.data[i].provider_name+' - '+res.data[i].acc_no+'</option>');
                                    }
                                }
                                $("button[type=submit]").prop("disabled", !1);
                            }
                        }).fail(function() { $("button[type=submit]").prop("disabled", !1); });
                        return !1;
                    }
                });
            }
        },
        5923: function() {
            $((function() {
                $('[data-toggle="tooltip"]').tooltip()
            }
            )),
            $((function() {
                $('[data-toggle="popover"]').popover()
            }
            )),
            $((function() {
                var e = window.location.pathname || "";
                e = e.replace(new RegExp("/","g"), "").toLowerCase(),
                $('.mdc-tab[data-active="' + e + '"]').addClass("mdc-tab--active"),
                $('.mdc-tab[data-active="' + e + '"] .mdc-tab-indicator').addClass("mdc-tab-indicator--active")
            }
            ));
            var e = $(".slider-content .btn-box.active");
            if (e.length) {
                var t = e.position().left;
                t = t + $(".slider-content").scrollLeft() - $(".slider-content").width() / 2 + e.outerWidth() / 2,
                $(".slider-content").animate({
                    scrollLeft: t
                }, "fast")
            }
            window.openLiveChat = function(e, t) {
                if ("undefined" != typeof LiveChatWidget && LiveChatWidget)
                    try {
                        LiveChatWidget.call("maximize"),
                        t && LiveChatWidget.call("set_customer_email", t)
                    } catch (e) {
                        console.error(e)
                    }
                else
                    e ? window.popitup(e, "livechat") : alert("Live Chat URL not set")
            }
            ,
            $(document).on("click", "#btn-close--live-draw-modal", (function() {
                return $("#live-draw-modal").nifty("hide"),
                $("#img--section-closebtn").trigger("click"),
                !1
            }
            )),
            $(document).on("click", "#btn-live-draw-modal", (function() {
                $("#live_draw_table").html("<p>Loading...."),
                $("#live-draw-modal").nifty("show"),
                $.get("/getHkgpLiveDraw", (function(e) {
                    $("#live_draw_table").html(e)
                }
                )).always((function() {}
                ))
            }
            )),
            window.change_lang = function(e) {
                var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "";
                return $.ajax({
                    url: "/change_lang/" + e + (t ? "/" + t : ""),
                    type: "get",
                    data: {},
                    success: function(e) {
                        location.reload()
                    }
                }),
                !1
            }
            ,
            window.bindChgPassFormJS = function() {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,20}$/;
                $("#chgPwdForm").validate({
                    rules: {
                        currentPwd: {
                            required: !0,
                            minlength: 6
                        },
                        newPwd: {
                            required: !0,
                            minlength: 8,
                            maxlength: 20,
                            pattern: e
                        },
                        confirmPwd: {
                            required: !0,
                            minlength: 8,
                            equalTo: "#newPwd"
                        }
                    },
                    messages: {
                        currentPwd: {
                            required: transMsgs.currentPwdRequired,
                            minlength: transMsgs.currentPwd5Chars
                        },
                        newPwd: {
                            required: transMsgs.newPwdRequired,
                            minlength: transMsgs.minimumEightLetterRequired,
                            maxlength: transMsgs.maximumTwentycharaters
                        },
                        confirmPwd: {
                            required: transMsgs.confirmPwdRequired,
                            minlength: transMsgs.minimumEightLetterRequired,
                            maxlength: transMsgs.maximumTwentycharaters,
                            equalTo: transMsgs.confirmPwdNotMatched
                        }
                    },
                    errorElement: "em",
                    errorPlacement: function(e, t) {
                        e.addClass("help-block"),
                        t.addClass("has-feedback"),
                        "checkbox" === t.prop("type") ? e.insertAfter(t.parent("label")) : e.insertAfter(t),
                        t.next("i:not(.toggle-password)")[0] || $("<i class='icon-cancel form-control-feedback absolute'></i>").insertAfter(t)
                    },
                    success: function(e, t) {
                        $(t).next("i:not(.toggle-password)")[0] || $("<i class='icon-checkmark  form-control-feedback absolute'></i>").insertAfter($(t))
                    },
                    highlight: function(e, t, n) {
                        $(e).addClass("has-error").removeClass("has-success"),
                        $(e).next("i:not(.toggle-password)").addClass("icon-cancel").removeClass("icon-checkmark")
                    },
                    unhighlight: function(e, t, n) {
                        $(e).addClass("has-success").removeClass("has-error"),
                        $(e).next("i:not(.toggle-password)").addClass("icon-checkmark").removeClass("icon-cancel")
                    },
                    submitHandler: function(e) {
                        $("#chgPwdForm button[type=submit]").prop("disabled", !0),
                        $(".message--chg-pass").hide();
                        var t = $(e).attr("action")
                          , n = $(e).serialize();
                        json_post(t, n).done((function(t) {
                            $(".message--chg-pass").show(),
                            $(e).each((function() {
                                this.reset()
                            }
                            )),
                            $("#chgPwdForm button[type=submit]").prop("disabled", !1)
                        }
                        )).fail((function() {
                            $("#chgPwdForm button[type=submit]").prop("disabled", !1)
                        }
                        ))
                    }
                })
            }
            ,
            window.bindChgComplaintFormJS = function() {
                $("#complaint-form").validate({
                    rules: {
                        complaint_name: {
                            required: !0
                        },
                        complaint_subject: {
                            required: !0
                        },
                        complaint_email: {
                            required: !0,
                            email: !0
                        },
                        complaint_message: {
                            required: !0
                        },
                        captcha: {
                            required: !0,
                            minlength: 4,
                            maxlength: 4,
                            remote: {
                                url: "/checkFormCaptcha",
                                type: "post",
                                dataType: "json",
                                complete: function(e) {
                                    "refreshCaptcha" == e.responseJSON && $(".btn-refresh-captcha").trigger("click")
                                }
                            }
                        }
                    },
                    messages: {
                        complaint_name: {
                            required: transMsgs.nameRequired
                        },
                        complaint_subject: {
                            required: transMsgs.subjectRequired
                        },
                        complaint_email: {
                            required: transMsgs.emailRequired,
                            email: transMsgs.emailRequired
                        },
                        complaint_message: {
                            required: transMsgs.messageRequired
                        },
                        captcha: {
                            required: transMsgs.captchaRequired,
                            remote: transMsgs.captchaRequired
                        }
                    },
                    errorElement: "em",
                    errorPlacement: function(e, t) {
                        e.addClass("help-block"),
                        t.addClass("has-feedback"),
                        "checkbox" === t.prop("type") ? e.insertAfter(t.parent("label")) : e.insertAfter(t),
                        t.next("i")[0] || $("<i class='icon-cancel form-control-feedback absolute'></i>").insertAfter(t)
                    },
                    success: function(e, t) {
                        $(t).next("i")[0] || $("<i class='icon-checkmark  form-control-feedback absolute'></i>").insertAfter($(t))
                    },
                    highlight: function(e, t, n) {
                        $(e).addClass("has-error").removeClass("has-success"),
                        $(e).next("i").addClass("icon-cancel").removeClass("icon-checkmark")
                    },
                    unhighlight: function(e, t, n) {
                        $(e).addClass("has-success").removeClass("has-error"),
                        $(e).next("i").addClass("icon-checkmark").removeClass("icon-cancel")
                    },
                    submitHandler: function(e) {
                        var t = $(e).attr("action")
                          , n = $(e).serialize();
                        json_post(t, n).done((function(t) {
                            $(".message--chg-pass").show(),
                            $(e).each((function() {
                                this.reset()
                            }
                            )),
                            $("#complaint-form button[type=submit]").prop("disabled", !0),
                            (t.status = "s") ? ($(e).each((function() {
                                this.reset()
                            }
                            )),
                            $(e).validate().resetForm(),
                            sweetAlert(t.m, "success", transMsgs.success).then((function() {
                                location.reload()
                            }
                            ))) : sweetAlert(t.msg)
                        }
                        )).fail((function() {
                            $("#complaint-form button[type=submit]").prop("disabled", !1)
                        }
                        ))
                    }
                })
            }
            ,
            $(document).on("click", ".toggle-password", (function() {
                $(this).toggleClass("icon-eye icon-eye-slash");
                var e = $($(this).attr("input_id"));
                return "password" === e.attr("type") ? e.attr("type", "text") : e.attr("type", "password"),
                !1
            }
            )),
            $(document).on("click", "#btn-copy--profile-edit", (function() {
                var e = document.getElementById("elCopyText");
                e.focus(),
                e.select();
                try {
                    document.execCommand("copy");
                    alert(transMsgs.copied + e.value)
                } catch (e) {}
                return !1
            }
            )),
            $("#btn-copy-visible-code").click((function() {
                var e = document.getElementById("visible-code");
                e.select();
                try {
                    document.execCommand("copy"),
                    alert(transMsgs.copied + e.value)
                } catch (e) {}
                return !1
            }
            )),
            $(document).on("click", ".btn-copy", (function() {
                var e = $(this).data("sel")
                  , t = document.getElementById(e);
                t.focus(),
                t.select();
                try {
                    document.execCommand("copy");
                    alert(transMsgs.copied + t.value)
                } catch (e) {}
                return !1
            }
            )),
            $(document).on("change", "#isOnSecondPin", (function(e) {
                var t = $("#isOnSecondPin").is(":checked") ? 1 : 0
                  , n = {
                    is_use_second_pin: t
                };
                console.log(n),
                json_post("/ajaxUpdate2ndPinFlag", n, "json", window.showLoadingImgFn, window.removeLoadingImgFn).done((function(e) {
                    $("#btn-reset2ndpin").toggle(1 == t)
                }
                ))
            }
            )),
            $(document).on("change", "#subscribeEmail", (function(e) {
                var t = $("#subscribeEmail").is(":checked") ? 1 : 0
                  , n = {
                    is_email_subscription: t
                };
                console.log(n),
                json_post("/ajaxUpdateEmailSubscription", n, "json", window.showLoadingImgFn, window.removeLoadingImgFn).done((function(e) {
                    $("#is_email_subscription").toggle(1 == t)
                }
                ))
            }
            )),
            $(window).on("load", (function() {
                var e = $("#langSelect").attr("data-selectLang");
                $("#langSelect #" + e).addClass("active")
            }
            )),
            $(".downloadmodal-trigger").click((function() {
                var e = $(this).attr("data-title");
                window.TWLaunchurl = $(this).attr("data-launchurl");
                var t = $(this).attr("data-apkurl")
                  , n = $(this).attr("data-title").toUpperCase();
                n = "/transferto" + e;
                $("#downloadurl").attr("href", t),
                $("#downloadgame-title").html(e),
                $("#gamename").html(e),
                $("#launchurl").attr("href", window.TWLaunchurl),
                $("#tw_transfer_form").attr("action", n),
                $("#apk-modal").addClass("md-show"),
                window.tw_information(),
                $("#apk-modal").on("hidden.nifty.modal", (function() {
                    $("#slider").slider("option", "value", 0)
                }
                ))
            }
            )),
            window.bindFa2FormValidation = function() {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "fa2Code"
                  , t = $(".fa2Code")
                  , n = /^\d+$/;
                t.on("input.fromManual", (function() {
                    var e = $(this);
                    if (n.test(e.val())) {
                        var a = t.eq(t.index(this) + 1);
                        a.length && 1 === e.val().length && a.focus()
                    } else
                        e.val("")
                }
                )),
                t.on("keydown", (function(e) {
                    if ("Backspace" === e.key && "" === $(this).val()) {
                        var n = t.eq(t.index(this) - 1);
                        n.length && n.focus()
                    }
                }
                )),
                t.on("paste", (function() {
                    var a = $(this)
                      , o = a.val();
                    a.val(""),
                    a.one("input.fromPaste", (function() {
                        var i, r = a.val();
                        6 === r.length && n.test(r) ? (i = r.split(""),
                        $(i).each((function(t) {
                            var n = $('.fa2Code[name="' + e + "[" + (t + 1) + ']"]');
                            n.length && n.val(i[t])
                        }
                        )),
                        t.eq(i.length - 1).focus()) : a.val(o),
                        t.attr("maxlength", 1)
                    }
                    )),
                    t.attr("maxlength", 6)
                }
                ))
            }
        },
        6956: function() {
            !function(e) {
                function t(t) {
                    t.stopPropagation(),
                    t.preventDefault(),
                    e("#mainContent").toggleClass("rightSideBarOpen"),
                    e("#r-side-bar").toggleClass("open"),
                    window.isAuth ? (e("#r-side-bar .side-bar-content").html(""),
                    xhr_get("/Profile.php").done((function(t) {
                        e("#r-side-bar .side-bar-content").html(t),
                        e(".profile-head .mdc-tab-bar .mdc-tab[data-tabname=edit]").addClass("active"),
                        e(".profile-head .mdc-tab-bar .mdc-tab[data-tabname=edit] .mdc-tab-indicator").addClass("active"),
                        e(".top-bar .mail_icon").is(":visible") && (e("#r-side-bar .side-bar-content .mail_icon").toggle(!0),
                        e(".side-bar-content .mail_icon,.side-bar-content .txt_mail_cnt").text(e(".top-bar .mail_icon").text()))
                    }
                    ))) : (e("#loginfreshCaptcha").trigger("click"),
                    window.loadOrRefreshTurnstileWidget("loginTurnstileWidget"))
                }
                e(document).on("click", "#btnToggleRSideNav", (function(e) {
                    return t(e),
                    !1
                }
                )),
                e(document).on("click", "#btnLogin--home", (function(e) {
                    return t(e),
                    !1
                }
                )),
                e(document).on("click", "#btnToggleSideNav", (function(t) {
                    return t.stopPropagation(),
                    t.preventDefault(),
                    e("#sideNav").toggleClass("open"),
                    e("#mainContent").toggleClass("sideNavOpen"),
                    !1
                }
                ))
            }(jQuery)
        },
        928: function() {
            var e;
            function t(e) {
                var t = $(e);
                if (t && t.length) {
                    var n = $(e).attr("data-url") + Date.now() + Math.floor(1e8 * Math.random());
                    t.attr("src", n)
                }
            }
            function n() {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : null
                  , n = !(arguments.length > 1 && void 0 !== arguments[1]) || arguments[1];
                e && (e.preventDefault(),
                e.stopPropagation()),
                n || $("#login-modal--layout").nifty("show"),
                $(".modal-title", "#login-modal--layout").text(transMsgs.forgotPassword),
                $("#pinForm").hide(),
                $("#loginForm").hide(),
                $("#fa2Form").hide(),
                $("#footer--login-modal").hide(),
                t("#forgotPwCaptchaimgpath"),
                $("#resetPwdForm").show(),
                window.loadOrRefreshTurnstileWidget("forgotPwdTurnstileWidget")
            }
            $(".message[_login-modal]").hide(),
            $("#pinForm").hide(),
            $("#fa2Form").hide(),
            $("#resetPwdForm").hide(),
            $("#loginForm").validate({
                rules: {
                    user_name: {
                        required: !0,
                        minlength: 4
                    },
                    password: {
                        required: !0,
                        minlength: 8,
                        maxlength: 20
                    },
                    LoginCaptcha: {
                        required: !0
                    }
                },
                messages: {
                    username: {
                        user_name: transMsgs.userNameRequired
                    },
                    password: {
                        required: transMsgs.pwdRequired
                    },
                    LoginCaptcha: {
                        required: transMsgs.captchaRequired
                    }
                },
                errorElement: "em",
                errorPlacement: function(e, t) {
                    e.addClass("help-block"),
                    t.addClass("has-feedback"),
                    "checkbox" === t.prop("type") ? e.insertAfter(t.parent("label")) : e.insertAfter(t),
                    t.next("i:not(.toggle-password)")[0] || $("<i class='icon-cancel form-control-feedback absolute'></i>").insertAfter(t)
                },
                success: function(e, t) {
                    $(t).next("i:not(.toggle-password)")[0] || $("<i class='icon-checkmark  form-control-feedback absolute'></i>").insertAfter($(t))
                },
                highlight: function(e, t, n) {
                    $(e).addClass("has-error").removeClass("has-success"),
                    $(e).next("i:not(.toggle-password):not(.left)").addClass("icon-cancel").removeClass("icon-checkmark")
                },
                unhighlight: function(e, t, n) {
                    $(e).addClass("has-success").removeClass("has-error"),
                    $(e).next("i:not(.toggle-password):not(.left)").addClass("icon-checkmark").removeClass("icon-cancel")
                },
                submitHandler: function(e, t) {
                    t.preventDefault();
                    var n = "#" + e.id;
                    $(n + " button[type=submit], .btn-refresh").prop("disabled", !0);
                    var a = $(e).attr("action")
                      , o = $(e).serialize()
                      , i = $(n).hasClass("js-inline-form");
                    return $(n + " .message").hide(),
                    json_post(a, o).done((function(e) {
                        onLoginCallback(e, i, n)
                    }
                    )).always((function() {
                        return $(n + " button[type=submit], .btn-refresh").prop("disabled", !1),
                        $(e).validate().resetForm(),
                        $("#loginfreshCaptcha").trigger("click"),
                        window.loadOrRefreshTurnstileWidget("loginTurnstileWidget"),
                        !1
                    }
                    )),
                    !1
                }
            }),
            e = "#resetPwdForm",
            $(e).validate({
                rules: {
                    email: {
                        required: function() {
                            return "email" == $('input[name="comm_type"]:checked').val()
                        },
                        email: !0
                    },
                    mobile: {
                        required: function() {
                            return "mobile" == $('input[name="comm_type"]:checked').val()
                        },
                        minlength: function(e) {
                            return $("#mobile").attr("minlength")
                        },
                        maxlength: function(e) {
                            return $("#mobile").attr("maxlength")
                        },
                        pattern: /^[0-9]+$/
                    },
                    forgotPwCaptchaimg: {
                        required: !0,
                        minlength: 4,
                        maxlength: 4,
                        remote: {
                            url: "/checkForgotPwCaptcha",
                            type: "post",
                            dataType: "json",
                            complete: function(e) {
                                console.log(e),
                                e && "Invalid captcha" == e.responseJSON && $("#fogotrefreshCaptcha").trigger("click")
                            }
                        }
                    }
                },
                messages: {
                    email: {
                        required: transMsgs.emailRequired,
                        email: transMsgs.emailInvalid
                    },
                    forgotPwCaptchaimg: {
                        required: transMsgs.captchaRequired,
                        remote: transMsgs.captchaInvalid,
                        minlength: transMsgs.minimum4LetterRequired
                    }
                },
                errorElement: "em",
                errorPlacement: function(e, t) {
                    e.addClass("help-block"),
                    t.addClass("has-feedback"),
                    "checkbox" === t.prop("type") ? e.insertAfter(t.parent("label")) : e.insertAfter(t),
                    t.next("i")[0] || $("<i class='icon-cancel form-control-feedback absolute'></i>").insertAfter(t)
                },
                success: function(e, t) {
                    $(t).next("i")[0] || $("<i class='icon-checkmark  form-control-feedback absolute'></i>").insertAfter($(t))
                },
                highlight: function(e, t, n) {
                    $(e).addClass("has-error").removeClass("has-success"),
                    $(e).next("i").addClass("icon-cancel").removeClass("icon-checkmark")
                },
                unhighlight: function(e, t, n) {
                    $(e).addClass("has-success").removeClass("has-error"),
                    $(e).next("i").addClass("icon-checkmark").removeClass("icon-cancel")
                },
                submitHandler: function(t, n) {
                    n.preventDefault(),
                    $("button[type=submit]").prop("disabled", !0);
                    var a = $(t).attr("action")
                      , o = $(t).serialize();
                    return $(e + " .alert.message").text("").hide(),
                    json_post(a, o).done((function(n) {
                        $("button[type=submit]").prop("disabled", !1);
                        var a = {};
                        $(t).serializeArray().forEach((function(e) {
                            a[e.name] = e.value
                        }
                        )),
                        onProcessForgotPwValidateCallBack(e, a, n)
                    }
                    )).fail((function(t, n, a) {
                        $("button[type=submit]").prop("disabled", !1);
                        var o = t.responseJSON ? t.responseJSON.message : a;
                        return $(e + " .alert.message").removeClass("alert-success").addClass("alert-danger").text(o).show(),
                        !1
                    }
                    )).always((function() {
                        $("#fogotrefreshCaptcha").trigger("click"),
                        window.loadOrRefreshTurnstileWidget("forgotPwdTurnstileWidget")
                    }
                    )),
                    !1
                }
            }),
            $(document).on("click", "#forgotPwd-btn--login-modal", (function(e) {
                n(e, !1)
            }
            )),
            $(document).on("click", "#btn-back--login-modal", (function(e) {
                return e.preventDefault(),
                e.stopPropagation(),
                $("#resetPwdForm").hide(),
                $("#loginForm").show(),
                !1
            }
            )),
            $(document).on("click", "#btn-back--fpw-verify-modal", (function(e) {
                return e.preventDefault(),
                e.stopPropagation(),
                $("#resetPwdForm .alert.message").hide(),
                $("#fpwOtpVerifyForm").hide(),
                $("#resetPwdForm").show(),
                !1
            }
            )),
            $("#js-btn-forgot-pwd").on("click", (function(e) {
                return n(e, !1),
                !1
            }
            ));
            function o() {
                var e = 60
                  , t = $("#resend-timer")
                  , n = $("#resend-countdown")
                  , a = $("#fpwResendOtpBtn");
                a.hide(),
                t.show(),
                n.text(e);
                var o = setInterval((function() {
                    e--,
                    n.text(e),
                    e <= 0 && (clearInterval(o),
                    t.hide(),
                    a.show())
                }
                ), 1e3)
            }
            function i(e) {
                a = $(e).prev(),
                $(a).is("[readonly]") ? i(a) : a.focus()
            }
            function r(e) {
                a = $(e).next(),
                $(a).is("[readonly]") ? r(a) : a.focus()
            }
            $("#loginfreshCaptcha").click((function(e) {
                e.preventDefault(),
                e.stopPropagation(),
                $("#LoginCaptcha").val("");
                var t = $("#loginCaptchaimg").attr("data-url") + Date.now() + Math.floor(1e8 * Math.random());
                $("#loginCaptchaimg").attr("src", t)
            }
            )),
            $("#fogotrefreshCaptcha").click((function(e) {
                e.preventDefault(),
                e.stopPropagation(),
                $("#forgotPwCaptchaimg").val(""),
                t("#forgotPwCaptchaimgpath")
            }
            )),
            window.onProcessForgotPwValidateCallBack = function(e, t, n) {
                var a = $(e + " .alert.message");
                if ("s" === n.s) {
                    if ("mobile" == t.comm_type) {
                        bindFa2FormValidation("otp_pincode"),
                        $("#resetPwdForm").hide(),
                        $("#footer--login-modal").hide(),
                        $("#fpwOtpVerifyForm").fadeIn();
                        var i = t.mobile
                          , r = t.contact_country
                          , s = n.data.otp_prefix;
                        $("#otpMobile").val(i),
                        $("#otpCountryCode").val(r),
                        $("#otpPrefix").val(s);
                        var l = i;
                        i.length >= 4 && (l = i.slice(0, 2) + "******" + i.slice(-2)),
                        $("#maskedNumber").text("".concat(r, "-").concat(l)),
                        $("#prefixValue").text(s),
                        o()
                    }
                    a.removeClass("alert-danger").addClass("alert-success").text(n.m).show()
                } else
                    a.removeClass("alert-success").addClass("alert-danger").text(n.m).show()
            }
            ,
            window.onLoginCallback = function(e, t, n) {
                if ("s" !== e.s)
                    return t ? window.sweetAlert(e.m, "warning", "warning", !1, !0, !0) : n && ($(n + " button[type=submit], .btn-refresh").prop("disabled", !1),
                    $(n + " .message").toggle(),
                    $(n + " .message").html(e.m)),
                    !1;
                if ("s" == e.s)
                    if (e.redirectUrl)
                        if (!e.action || "validate-pin" != e.action && "setup-pin" != e.action && "validate-2fa" != e.action) {
                            var a = "";
                            e.data && e.data.isFirstLogin && (a = "?isFirstLogin=1"),
                            window.location.href = e.redirectUrl + a
                        } else if ("validate-2fa" == e.action)
                            t ? ($(".modal-title", "#login-modal--layout").text(transMsgs.validatePin),
                            $("#login-modal--layout").nifty("show")) : $("#loginForm").slideUp(),
                            $("#resetPwdForm").hide(),
                            $("#footer--login-modal").hide(),
                            $("#fa2Form").fadeIn();
                        else {
                            if ("setup-pin" == e.action)
                                return $("#btn-close--login-modal").trigger("click"),
                                sweetAlert(e.m, "warning", "Warning", !0).then((function(e) {
                                    location.href = "/setup-pin"
                                }
                                )),
                                !1;
                            t ? ($(".modal-title", "#login-modal--layout").text(transMsgs.validatePin),
                            $("#login-modal--layout").nifty("show")) : $("#loginForm").slideUp(),
                            e.data && e.data.sp && (console.log(e.data.sp),
                            $(".pin-in-grp").html(e.data.sp)),
                            $("#resetPwdForm").hide(),
                            $("#pinForm").fadeIn(),
                            $("#footer--login-modal").hide()
                        }
                    else
                        e.action && "already-auth" == e.action || location.reload()
            }
            ,
            $(document).on("submit", "#pinForm", (function(e) {
                e.preventDefault(),
                $("#" + this.id + " .btn-submit").prop("disabled", !0);
                var t = "#" + this.id;
                $(t + " .message").hide();
                var n = "";
                if ($(".pin-in-grp input").each((function() {
                    n += this.value
                }
                )),
                n.length < 6)
                    return $(t + " .btn-submit").prop("disabled", !1),
                    $(t + " .message").show(),
                    $(t + " .message").html("Pin is incomplete"),
                    !1;
                var a = $(this).attr("action")
                  , o = $(this).serialize();
                return json_post(a, o).done((function(e) {
                    if (console.log("validate fa2"),
                    "s" != e.s)
                        return $(t + " .message").show(),
                        $(t + " .message").html(e.m),
                        !1;
                    if (e.redirectUrl) {
                        var n = "";
                        e.data && e.data.isFirstLogin && (n = "?isFirstLogin=1"),
                        window.location.href = e.redirectUrl + n
                    } else
                        location.reload();
                    return !1
                }
                )).always((function(e, n, a) {
                    return $(".pincode").val(""),
                    $(t + " .btn-submit").removeAttr("disabled"),
                    !1
                }
                )),
                !1
            }
            )),
            $(document).on("click", ".pinkey", (function() {
                var e = $(this).val();
                if ("Back" != e)
                    return $(this).parents("form").find("input.pincode").each((function() {
                        if (!$(this).val())
                            return $(this).val(e),
                            $(this).val().length == $(this).attr("maxlength") && $(this).nextAll("input:enabled:not([readonly])")[0] && $(this).nextAll("input:enabled:not([readonly])")[0].focus(),
                            !1
                    }
                    )),
                    !1
            }
            )),
            $(document).on("click", "#back_bt", (function(e) {
                return e.preventDefault(),
                $($(this).parents("form").find(".pincode:not([readonly])").get().reverse()).each((function() {
                    if ($(this).val())
                        return $(this).val(""),
                        $(this).focus(),
                        !1
                }
                )),
                !1
            }
            )),
            $(".pin-in-grp").keyup((function(e) {
                8 == e.keyCode ? i($(this).find(":focus")) : r(e.target);
                return !1
            }
            )),
            $("#mobileInput").hide(),
            $('input[name="comm_type"][value="email"]').prop("checked", !0),
            $(document).on("click", ".fpwContactMethod", (function() {
                var e = $(this).data("type");
                $("#mobileInput, #emailInput").hide(),
                "mobileOpt" == e ? ($("#mobileInput").show(),
                $("#fpwSubmitBtn").text("Send OTP"),
                $('input[name="comm_type"][value="mobile"]').prop("checked", !0),
                $('input[name="comm_type"][value="email"]').prop("checked", !1)) : ($("#emailInput").show(),
                $("#fpwSubmitBtn").text("Reset"),
                $('input[name="comm_type"][value="mobile"]').prop("checked", !1),
                $('input[name="comm_type"][value="email"]').prop("checked", !0))
            }
            )),
            $("#fpw-contact-country .js-opt").on("click", (function(e) {
                e.preventDefault(),
                e.stopPropagation();
                var t = $(this).data("value");
                $("input[name=contact_country]").val(t),
                $("#txt-contact-country").text("+" + t),
                $("#def-ctrycontact-opt").text($(this).text()).data("value", t),
                $(this).parents(".input-group-btn").removeClass("open")
            }
            )),
            $(document).on("click", "#fpwResendOtpBtn", (function(e) {
                e.preventDefault();
                var t = {
                    mobile: $("#otpMobile").val(),
                    contact_country: $("#otpCountryCode").val(),
                    purpose: "forgot_password"
                };
                json_post("reset-password/resend-sms-otp", t).done((function(e) {
                    if ("s" === e.s) {
                        var t = e.data.otp_prefix;
                        $("#otpPrefix").val(t),
                        $("#prefixValue").text(t),
                        o()
                    } else
                        alertBox.removeClass("alert-danger").addClass("alert-success").text(e.m).show()
                }
                ))
            }
            )),
            $(document).on("submit", "#fpwOtpVerifyForm", (function(e) {
                e.preventDefault(),
                $("#" + this.id + " .btn-submit").prop("disabled", !0);
                var t = "#" + this.id;
                $(t + " .message").hide();
                var n = "";
                if ($(".otp-pin-in-grp input").each((function() {
                    n += this.value
                }
                )),
                n.length < 6)
                    return $(t + " .btn-submit").prop("disabled", !1),
                    $(t + " .message").show(),
                    $(t + " .message").html("Pin is incomplete"),
                    !1;
                var a = $(this).attr("action")
                  , o = {
                    otp: n,
                    otp_prefix: $("#otpPrefix").val(),
                    mobile: $("#otpMobile").val(),
                    contact_country: $("#otpCountryCode").val()
                };
                return json_post(a, o).done((function(e) {
                    return "s" != e.s ? ($(t + " .message").show(),
                    $(t + " .message").html(e.m),
                    !1) : (e.redirectUrl ? window.location.href = e.redirectUrl : location.reload(),
                    !1)
                }
                )).always((function(e, n, a) {
                    return $(".otp_pincode").val(""),
                    $(t + " .btn-submit").removeAttr("disabled"),
                    !1
                }
                )),
                !1
            }
            )),
            $(document).on("submit", "#fa2Form", (function(e) {
                e.preventDefault(),
                $("#" + this.id + " .btn-submit").prop("disabled", !0);
                var t = "#" + this.id;
                $(t + " .message").hide();
                var n = "";
                if ($(".pin-in-grp input").each((function() {
                    n += this.value
                }
                )),
                n.length < 6)
                    return $(t + " .btn-submit").prop("disabled", !1),
                    $(t + " .message").show(),
                    $(t + " .message").html("Pin is incomplete"),
                    !1;
                var a = $(this).attr("action");
                return json_post(a, {
                    fa2_token: n
                }).done((function(e) {
                    if (console.log("validate fa2"),
                    "s" != e.s)
                        return $(t + " .message").show(),
                        $(t + " .message").html(e.m),
                        !1;
                    if (e.redirectUrl) {
                        var n = "";
                        e.data && e.data.isFirstLogin && (n = "?isFirstLogin=1"),
                        window.location.href = e.redirectUrl + n
                    } else
                        location.reload();
                    return !1
                }
                )).always((function(e, n, a) {
                    return $(".pincode").val(""),
                    $(t + " .btn-submit").removeAttr("disabled"),
                    !1
                }
                )),
                !1
            }
            ))
        },
        9117: function() {
            switch (window.lang) {
            case "id":
                window.transMsgs = {
                    cfTimeout: "Jaringan Terputus, Silakan Coba Refresh kembali",
                    cfChallenge: "Sistem perlu meninjau keamanan koneksi Anda sebelum melanjutkan. Silakan Coba Refresh kembali",
                    transFailedAmt0: "Transfer SEMUA ke dompet gagal. Jumlah Transfer harus lebih dari 0",
                    currentPwdRequired: "Kata Sandi Saat Ini diperlukan",
                    currentPwd5Chars: "Kata Sandi saat ini harus lebih dari 5 karakter",
                    newPwdRequired: "Kata Sandi Baru diperlukan",
                    newPwd5Chars: "Kata sandi baru harus lebih dari 5 karakter",
                    confirmPwdRequired: "Konfirmasi Kata Sandi diperlukan",
                    confirmPwd5chars: "Konfirmasi Kata Sandi harus lebih dari 5 karakter",
                    confirmPwdNotMatched: "Konfirmasi Kata Sandi harus cocok dengan Kata Sandi Baru.",
                    copied: "Disalin ke papan klip: ",
                    emailRequired: "Email tidak boleh kosong",
                    emailInvalid: "Email tidak valid",
                    captchaRequired: "Captcha Diperlukan",
                    captchaInvalid: "Captcha tidak valid",
                    minimum4LetterRequired: "Diperlukan minimal 4 karakter",
                    userNameRequired: "Username diperlukan dan tidak boleh kosong",
                    pwdRequired: "Kata sandi diperlukan dan tidak boleh kosong",
                    plsLogin: "Silahkan login terlebih dahulu sebelum membuka permainan",
                    blockedFrGame: "Untuk saat ini Anda tidak dapat bermain permainan ini, silahkan hubungi CS untuk info lebih lanjut.",
                    gameMaintenance: "Game sedang dalam maintenance.",
                    gameComingSoon: "Game ini akan datang",
                    pageComingSoon: "Halaman akan segera hadir",
                    confirmDeliveryAddress: "Setelah mengonfirmasi alamat, Anda tidak dapat melakukan perubahan lagi. Apakah Anda yakin ingin melanjutkan?",
                    gamePromoBlock: "Game yang Anda klik bukan milik kategori promosi yang sedang berjalan. Setelah promosi selesai, Anda dapat kembali bermain",
                    forgotPwdEmail: "Perubahan password Anda telah dikirim ke Email. Silahkan reset melalui Email Anda yang terdaftar. Jika Anda tidak menemukan pesan email di kotak masuk, silakan periksa di kotak spam / sampah.",
                    pulsaRefNoPlaceholder: "Isi Nomor HP Pengirim atau Serial Number",
                    transferSuccess: "Transfer Berhasil",
                    accountFullNameRequired: "Nama Lengkap Diperlukan",
                    fullNamesConsistOfAlphabets: "Nama lengkap hanya boleh terdiri dari huruf dan spasi, untuk spasi berturut-turut tidak diperbolehkan",
                    minimumThreeCharatersRequired: "Diperlukan minimal 3 karakter",
                    bankRequired: "Bank Diperlukan",
                    bankAccountNumberRequired: "Nomor rekening bank Diperlukan",
                    bankAccountPattern: "Nomor rekening bank hanya boleh terdiri dari angka",
                    minimumEightLetterRequired: "Diperlukan minimal 8 karakter",
                    minimum13LetterRequired: "Diperlukan minimal 13 karakter",
                    minimum10LetterRequired: "Diperlukan minimal 10 karakter",
                    minimum12LetterRequired: "Diperlukan minimal 12 karakter",
                    minimum15LetterRequired: "Diperlukan minimal 15 karakter",
                    maximumTwentycharaters: "Maksimal hanya 20 karakter",
                    bankAccountNamesNotAvailable: "Nomor rekening bank sudah terdaftar",
                    success: "Berhasil",
                    pCodeConfirm: "Kode promo Anda belum dikonfirmasi. Anda yakin ingin melanjutkan?",
                    offlineBank: "BANK SAAT INI OFFLINE, kami akan memproses transaksi Anda setelah bank online. Anda yakin ingin melanjutkan?",
                    walletTranserSuccess: "berhasil ditransfer ke game",
                    fullNamesConsistAlphabets: "Nama lengkap hanya boleh terdiri dari huruf",
                    mobileNumberRequired: "Nomor ponsel diperlukan",
                    mobileNumberNumbersOnly: "Nomor ponsel harus terdiri dari angka saja",
                    mobileNumberNotAvailable: "Nomor ponsel tidak tersedia",
                    more: "LEBIH",
                    forgotPassword: "Lupa kata sandi",
                    validatePin: "Validasi Pin"
                };
                break;
            case "th":
                window.transMsgs = {
                    cfTimeout: "หมดเวลาการเชื่อมต่อ โปรดลองรีเฟรชอีกครั้ง",
                    cfChallenge: "ระบบ จำเป็นต้องตรวจสอบความปลอดภัยของการเชื่อมต่อของคุณก่อนดำเนินการต่อ โปรดรีเฟรชหน้านี้",
                    transFailedAmt0: "ไม่สามารถโอนทั้งหมดไปยังกระเป๋าเงินได้ จำนวนเงินโอนจะต้องมากกว่า 0",
                    currentPwdRequired: "ต้องการรหัสผ่านปัจจุบัน",
                    currentPwd5Chars: "รหัสผ่านปัจจุบันจะต้องเกิน 5 ตัวอักษร",
                    newPwdRequired: "รหัสผ่านใหม่ต้องไม่ว่างเปล่า",
                    newPwd5Chars: "รหัสผ่านใหม่จะต้องเกิน 5 ตัวอักษร",
                    confirmPwdRequired: "ต้องยืนยันรหัสผ่าน",
                    confirmPwd5chars: "ยืนยันรหัสผ่านจะต้องเกิน 5 ตัวอักษร",
                    confirmPwdNotMatched: "รหัสผ่านการยืนยันจะต้องตรงกับรหัสผ่านใหม่",
                    copied: "คัดลอกไปที่คลิปบอร์ด: ",
                    emailRequired: "อีเมลต้องไม่ว่างเปล่า",
                    emailInvalid: "อีเมลไม่ถูกต้อง",
                    captchaRequired: "ต้องระบุ Captcha",
                    captchaInvalid: "Captcha ไม่ถูกต้อง",
                    minimum4LetterRequired: "ต้องมีตัวละครอย่างน้อย 4 ตัว",
                    userNameRequired: "ต้องระบุชื่อผู้ใช้และต้องไม่ว่างเปล่า",
                    pwdRequired: "ต้องใช้รหัสผ่านและต้องไม่ว่างเปล่า",
                    plsLogin: "โปรดเข้าสู่ระบบเพื่อจะดำเนินการต่อ",
                    blockedFrGame: "คุณถูกระงับ / ถูกบล็อกไม่ให้เล่นเกมนี้ กรุณาติดต่อฝ่ายบริการลูกค้าสำหรับข้อมูลเพิ่มเติม",
                    gameMaintenance: "เกมอยู่ระหว่างการบำรุงรักษา",
                    gameComingSoon: "เกมกำลังจะมาถึง",
                    pageComingSoon: "เพจกำลังจะมาเร็วๆนี้",
                    confirmDeliveryAddress: "หลังจากยืนยันที่อยู่แล้วจะไม่สามารถทำการเปลี่ยนแปลงได้อีก คุณแน่ใจหรือไม่ว่าต้องการดำเนินการต่อ",
                    gamePromoBlock: "เกมที่คุณคลิกไม่ได้อยู่ในหมวดโปรโมชั่นปัจจุบัน หลังจากการโปรโมตคุณสามารถกลับไปที่เกม",
                    forgotPwdEmail: "โปรดตรวจสอบอีเมลของคุณอีเมลรีเซ็ตรหัสผ่านถูกส่งไปแล้ว. หากคุณไม่พบในกล่องจดหมายโปรดตรวจสอบในกล่องจดหมายขยะ / ขยะ",
                    pulsaRefNoPlaceholder: "กรอกหมายเลขโทรศัพท์มือถือหรือหมายเลขซีเรียลของผู้ส่ง",
                    transferSuccess: "ถ่ายโอนความสำเร็จ",
                    accountFullNameRequired: "ต้องระบุชื่อนามสกุล",
                    fullNamesConsistOfAlphabets: "ชื่อเต็มต้องประกอบด้วยตัวอักษรและช่องว่างเดียวเท่านั้นไม่อนุญาตให้เว้นวรรคติดต่อกันหลายช่อง",
                    minimumThreeCharatersRequired: "ต้องมีตัวละครอย่างน้อย 3 ตัว",
                    bankRequired: "ต้องใช้ธนาคาร",
                    bankAccountNumberRequired: "ต้องระบุหมายเลขบัญชีธนาคาร",
                    bankAccountPattern: "หมายเลขบัญชีธนาคารต้องประกอบด้วยตัวเลขเท่านั้น",
                    minimumEightLetterRequired: "ต้องมีตัวละครอย่างน้อย 8 ตัว",
                    minimum13LetterRequired: "ต้องมีตัวละครอย่างน้อย 13 ตัว",
                    minimum10LetterRequired: "ต้องมีตัวละครอย่างน้อย 10 ตัว",
                    minimum12LetterRequired: "ต้องมีตัวละครอย่างน้อย 12 ตัว",
                    minimum15LetterRequired: "ต้องมีตัวละครอย่างน้อย 15 ตัว",
                    maximumTwentycharaters: "สูงสุด 20 ตัวอักษรเท่านั้น",
                    bankAccountNamesNotAvailable: "ไม่มีชื่อบัญชีธนาคาร",
                    success: "ความสำเร็จ",
                    pCodeConfirm: "รหัสโปรโมชั่นของคุณยังไม่ได้รับการยืนยัน แน่ใจไหมว่าต้องการดำเนินการต่อ",
                    offlineBank: "ธนาคารเป็นแบบออฟไลน์ในปัจจุบันเราจะดำเนินการธุรกรรมของคุณหลังจากที่ธนาคารออนไลน์ แน่ใจไหมว่าต้องการดำเนินการต่อ",
                    walletTranserSuccess: "โอนไปยังเกมเรียบร้อยแล้ว",
                    fullNamesConsistAlphabets: "ชื่อเต็มต้องประกอบด้วยตัวอักษรเท่านั้น",
                    mobileNumberRequired: "จำเป็นต้องใช้หมายเลขโทรศัพท์มือถือ",
                    mobileNumberNumbersOnly: "หมายเลขโทรศัพท์มือถือต้องประกอบด้วยตัวเลขเท่านั้น",
                    mobileNumberNotAvailable: "ไม่มีหมายเลขโทรศัพท์มือถือ",
                    more: "มากกว่า",
                    forgotPassword: "ลืมรหัสผ่าน",
                    validatePin: "ตรวจสอบพิน"
                };
                break;
            case "vn":
                window.transMsgs = {
                    cfTimeout: "Hết thời gian kết nối, Vui lòng thử Làm mới lại",
                    cfChallenge: "Hệ thống cần xem lại tính bảo mật của kết nối của bạn trước khi tiếp tục. Vui lòng làm mới trang",
                    transFailedAmt0: "Không thể chuyển tất cả vào ví. Số tiền chuyển phải lớn hơn 0",
                    currentPwdRequired: "Cần mật khẩu hiện tại",
                    currentPwd5Chars: "Mật khẩu hiện tại phải vượt quá 5 ký tự",
                    newPwdRequired: "Mật khẩu mới không thể để trống",
                    newPwd5Chars: "Mật khẩu mới phải vượt quá 5 ký tự",
                    confirmPwdRequired: "Xác nhận mật khẩu là bắt buộc",
                    confirmPwd5chars: "Xác nhận mật khẩu phải vượt quá 5 ký tự",
                    confirmPwdNotMatched: "Mật khẩu xác nhận phải khớp với mật khẩu mới.",
                    copied: "Sao chép vào clipboard: ",
                    emailRequired: "Email không thể để trống",
                    captchaRequired: "Captcha bắt buộc",
                    captchaInvalid: "Đâu vao không hợp lệ",
                    minimum4LetterRequired: "Yêu cầu tối thiểu 4 charaters",
                    emailInvalid: "Email không hợp lệ",
                    userNameRequired: "Tên người dùng là bắt buộc và không thể để trống",
                    pwdRequired: "Mật khẩu là bắt buộc và không thể để trống",
                    plsLogin: "Làm ơn đăng nhập để tiếp tục",
                    blockedFrGame: "Bạn bị đình chỉ / chặn chơi trò chơi này. Vui lòng liên hệ với dịch vụ khách hàng để biết thêm.",
                    gameMaintenance: "Trò chơi đang bảo trì.",
                    gameComingSoon: "Trò chơi sẽ sớm ra mắt",
                    pageComingSoon: "Trang sẽ sớm ra mắt",
                    confirmDeliveryAddress: "Sau khi xác nhận địa chỉ không thể thay đổi nữa. Bạn có chắc chắn muốn tiếp tục không?",
                    gamePromoBlock: "Trò chơi bạn đã nhấp không thuộc danh mục khuyến mãi hiện tại. Sau khi quảng cáo, bạn có thể quay lại trò chơi",
                    forgotPwdEmail: "Vui lòng kiểm tra email của bạn, email mật khẩu đặt lại đã được gửi. Nếu bạn không tìm thấy nó trong hộp thư đến, vui lòng kiểm tra trong hộp thư rác / rác.",
                    pulsaRefNoPlaceholder: "Điền số điện thoại di động hoặc số sê-ri của người gửi",
                    transferSuccess: "Chuyển giao thành công",
                    accountFullNameRequired: "Họ và Tên Yêu cầu",
                    fullNamesConsistOfAlphabets: "Tên đầy đủ chỉ được bao gồm bảng chữ cái và dấu cách đơn, không được phép có nhiều dấu cách liên tiếp",
                    minimumThreeCharatersRequired: "Yêu cầu tối thiểu 3 charaters",
                    bankRequired: "Ngân hàng yêu cầu",
                    bankAccountNumberRequired: "Số tài khoản ngân hàng Bắt buộc",
                    bankAccountPattern: "Số tài khoản ngân hàng chỉ có thể bao gồm các số",
                    minimumEightLetterRequired: "Yêu cầu tối thiểu 8 charaters",
                    minimum13LetterRequired: "Yêu cầu tối thiểu 13 charaters",
                    minimum10LetterRequired: "Yêu cầu tối thiểu 10 charaters",
                    minimum12LetterRequired: "Yêu cầu tối thiểu 12 charaters",
                    minimum15LetterRequired: "Yêu cầu tối thiểu 15 charaters",
                    maximumTwentycharaters: "Chỉ tối đa 20 charaters",
                    bankAccountNamesNotAvailable: "Tên tài khoản ngân hàng không có sẵn",
                    success: "Sự thành công",
                    pCodeConfirm: "Mã khuyến mãi của bạn chưa được xác nhận. Bạn có chắc chắn muốn tiếp tục không?",
                    offlineBank: "NGÂN HÀNG HIỆN TẠI NGOẠI TUYẾN, chúng tôi sẽ xử lý giao dịch của bạn sau khi ngân hàng trực tuyến. Bạn có chắc chắn muốn tiếp tục không?",
                    walletTranserSuccess: "chuyển thành công sang trò chơi",
                    fullNamesConsistAlphabets: "Tên đầy đủ chỉ có thể bao gồm các bảng chữ cái",
                    mobileNumberRequired: "Số điện thoại di động bắt buộc",
                    mobileNumberNumbersOnly: "Số điện thoại di động chỉ cần bao gồm các số",
                    mobileNumberNotAvailable: "Số điện thoại di động không khả dụng",
                    more: "HƠN",
                    forgotPassword: "Quên mật khẩu",
                    validatePin: "Xác thực mã pin"
                };
                break;
            case "cn":
                window.transMsgs = {
                    cfTimeout: "连接超时，请尝试刷新",
                    cfChallenge: "系統 需要在继续之前检查您的连接的安全性。请刷新页面",
                    transFailedAmt0: "将全部转移到钱包失败。转账金额必须大于0",
                    currentPwdRequired: "需要当前密码",
                    currentPwd5Chars: "当前密码必须超过5个字符",
                    newPwdRequired: "新密码不能为空",
                    newPwd5Chars: "新密码必须超过5个字符",
                    confirmPwdRequired: "确认密码为必填项",
                    confirmPwd5chars: "确认密码必须超过5个字符",
                    confirmPwdNotMatched: "确认密码必须与新密码匹配。",
                    copied: "复制到剪贴板: ",
                    emailRequired: "电子邮件不能为空",
                    emailInvalid: "电邮无效",
                    captchaRequired: "需要验证码",
                    captchaInvalid: "无效输入",
                    minimum4LetterRequired: "至少需要4个字符",
                    userNameRequired: "用户名为必填项，不能为空",
                    pwdRequired: "密码为必填项，不能为空",
                    plsLogin: "请登录访问更多内容",
                    blockedFrGame: "您已被暂停/被阻止玩此游戏。 请联系客服以获取更多信息。",
                    gameMaintenance: "游戏正在维护中。",
                    gameComingSoon: "游戏即将推出",
                    pageComingSoon: "该页面即将推出",
                    confirmDeliveryAddress: "确认地址后无法再进行更改。您确定要继续吗？",
                    gamePromoBlock: "您单击的游戏不属于当前促销类别。 促销结束后，您可以返回游戏",
                    forgotPwdEmail: "请检查您的电子邮件，重置密码电子邮件已发送。如果您没有在收件箱中找到它，请检查垃圾邮件/垃圾箱。",
                    pulsaRefNoPlaceholder: "填写发件人的手机号码或序列号",
                    transferSuccess: "转移成功",
                    accountFullNameRequired: "需要全名",
                    fullNamesConsistOfAlphabets: "全名只能由字母和单个空格组成，不允许多个连续的空格",
                    minimumThreeCharatersRequired: "至少需要3个字符",
                    bankRequired: "需要银行",
                    bankAccountNumberRequired: "银行帐号必填",
                    bankAccountPattern: "银行帐号只能包含数字",
                    minimumEightLetterRequired: "至少需要8个字符",
                    minimum13LetterRequired: "至少需要13个字符",
                    minimum10LetterRequired: "至少需要10个字符",
                    minimum12LetterRequired: "至少需要12个字符",
                    minimum15LetterRequired: "至少需要15个字符",
                    maximumTwentycharaters: "最多20个字符",
                    bankAccountNamesNotAvailable: "银行帐户名称不可用",
                    success: "成功",
                    pCodeConfirm: "您的促销代码尚未确认。您确定要继续吗？",
                    offlineBank: "银行目前处于离线状态，我们将在银行在线后处理您的交易。您确定要继续吗？",
                    walletTranserSuccess: "成功转移到游戏中",
                    fullNamesConsistAlphabets: "全名只能包含字母",
                    mobileNumberRequired: "手机号码必填",
                    mobileNumberNumbersOnly: "手机号码仅需包含数字",
                    mobileNumberNotAvailable: "手机号码不可用",
                    more: "更多",
                    forgotPassword: "忘记密码",
                    validatePin: "验证密码"
                };
                break;
            case "zh-hk":
                window.transMsgs = {
                    cfTimeout: "連接超時，請嘗試刷新",
                    cfChallenge: "系统 需要在繼續之前檢查您的連接的安全性。請刷新頁面",
                    transFailedAmt0: "將全部轉移到錢包失敗。轉賬金額必須大於0",
                    currentPwdRequired: "需要當前密碼",
                    currentPwd5Chars: "當前密碼必須超過5個字符",
                    newPwdRequired: "新密碼不能為空",
                    newPwd5Chars: "新密碼必須超過5個字符",
                    confirmPwdRequired: "確認密碼為必填項",
                    confirmPwd5chars: "确认密码必须超过5个字符",
                    confirmPwdNotMatched: "確認密碼必須超過5個字符",
                    copied: "複製到剪貼板: ",
                    emailRequired: "電子郵件不能為空",
                    emailInvalid: "電郵無效",
                    captchaRequired: "需要驗證碼",
                    captchaInvalid: "無效输入",
                    minimum4LetterRequired: "至少需要4個字符",
                    userNameRequired: "用戶名為必填項，不能為空",
                    pwdRequired: "密碼為必填項，不能為空",
                    plsLogin: "請登錄訪問更多內容",
                    blockedFrGame: "您已被暫停/被阻止玩此遊戲。請聯繫客服以獲取更多信息。",
                    gameMaintenance: "遊戲正在維護中。",
                    gameComingSoon: "遊戲即將推出",
                    pageComingSoon: "該頁面即將推出",
                    confirmDeliveryAddress: "地址確認後不可再更改。您確定要繼續嗎？",
                    gamePromoBlock: "您單擊的遊戲不屬於當前促銷類別。促銷結束後，您可以返回游戲",
                    forgotPwdEmail: "請檢查您的電子郵件，重置密碼電子郵件已發送。如果您沒有在收件箱中找到它，請檢查垃圾郵件/垃圾箱。",
                    pulsaRefNoPlaceholder: "填寫發件人的手機號碼或序列號",
                    transferSuccess: "轉移成功",
                    accountFullNameRequired: "需要全名",
                    fullNamesConsistOfAlphabets: "全名只能由字母和單個空格組成，不允許多個連續的空格",
                    minimumThreeCharatersRequired: "至少需要3個字符",
                    bankRequired: "需要銀行",
                    bankAccountNumberRequired: "銀行帳號必填",
                    bankAccountPattern: "銀行帳號只能包含數字",
                    minimumEightLetterRequired: "至少需要8個字符",
                    minimum13LetterRequired: "至少需要13個字符",
                    minimum10LetterRequired: "至少需要10個字符",
                    minimum12LetterRequired: "至少需要12個字符",
                    minimum15LetterRequired: "至少需要15個字符",
                    maximumTwentycharaters: "最多20個字符",
                    bankAccountNamesNotAvailable: "銀行帳戶名稱不可用",
                    success: "成功",
                    pCodeConfirm: "您的促銷代碼尚未確認。您確定要繼續嗎？",
                    offlineBank: "銀行目前處於離線狀態，我們將在銀行在線後處理您的交易。您確定要繼續嗎？",
                    walletTranserSuccess: "成功轉移到遊戲中",
                    fullNamesConsistAlphabets: "全名只能包含字母",
                    mobileNumberRequired: "手機號碼必填",
                    mobileNumberNumbersOnly: "手機號碼僅需包含數字",
                    mobileNumberNotAvailable: "手機號碼不可用",
                    more: "更多",
                    forgotPassword: "忘记密码",
                    validatePin: "验证密码"
                };
                break;
            default:
                window.transMsgs = {
                    cfTimeout: "Connection time out , Please refresh and try again",
                    cfChallenge: "System needs to review the security of your connection before proceeding. Please refresh the page",
                    transFailedAmt0: "Transfer ALL to wallet failed. Transfer Amount must be more than 0",
                    currentPwdRequired: "Current Password is required",
                    currentPwd5Chars: "Current Password must be more than 5 characters",
                    newPwdRequired: "New Password is required",
                    newPwd5Chars: "New Password must be more than 5 characters",
                    confirmPwdRequired: "Confirm Password is required",
                    confirmPwd5chars: "Confirm Password must be more than 5 characters",
                    confirmPwdNotMatched: "Confirm Password must match the New Password.",
                    copied: "Copied to clipboard: ",
                    emailRequired: "Email can't be empty",
                    emailInvalid: "Email invalid",
                    captchaRequired: "Captcha Required",
                    captchaInvalid: "Captcha invalid",
                    minimum4LetterRequired: "A minimum of 4 charaters are required",
                    userNameRequired: "Username  is required and can't be empty",
                    pwdRequired: "Password is required and can't be empty",
                    plsLogin: "Please login to continue",
                    blockedFrGame: "You are suspended / blocked from playing this game. Please contact CS for more info.",
                    gameMaintenance: "Game is under maintenance.",
                    gameComingSoon: "Game is coming soon",
                    pageComingSoon: "The Page will coming soon",
                    confirmDeliveryAddress: "After confirm the address can't make change again. Are you sure you would like to proceed?",
                    gamePromoBlock: "The game you clicked does not belong to the current promotion category. After the promotion is finished, you can return to playing",
                    forgotPwdEmail: "Please check your email, the reset password email has been sent. If you did not find it in inbox, kindly check in the spam/junk box.",
                    pulsaRefNoPlaceholder: "Fill in Sender's Mobile Number or Serial Number",
                    transferSuccess: "Transfer success",
                    accountFullNameRequired: "Account Full Name Required",
                    fullNamesConsistOfAlphabets: "Full names can only consist of alphabets and single spaces, multiple consecutive spaces not allowed",
                    minimumThreeCharatersRequired: "A minimum of 3 charaters is required",
                    bankRequired: "Bank Diperlukan",
                    bankAccountNumberRequired: "Bank account number Required",
                    bankAccountPattern: "Bank account numbers can only consist of numbers",
                    minimumEightLetterRequired: "A minimum of 8 charaters are required",
                    minimum13LetterRequired: "A minimum of 13 charaters are required",
                    minimum10LetterRequired: "A minimum of 10 charaters are required",
                    minimum12LetterRequired: "A minimum of 12 charaters are required",
                    minimum15LetterRequired: "A minimum of 15 charaters are required",
                    maximumTwentycharaters: "Maximum of 20 charaters only",
                    bankAccountNamesNotAvailable: "Bank account names are not available",
                    success: "Success",
                    pCodeConfirm: "Your promo code is not yet Your promo code is not yet confirmed. Are you sure you would like to proceed?. Are you sure you would like to proceed?",
                    offlineBank: "BANK IS CURRENTLY OFFLINE , we will process your transaction after Bank Online. Are you sure you would like to proceed?",
                    walletTranserSuccess: "successfully transfered to the game",
                    fullNamesConsistAlphabets: "Full names can only consist of alphabets",
                    mobileNumberRequired: "Mobile number Required",
                    mobileNumberNumbersOnly: "Mobile numbers need to consist of numbers only",
                    mobileNumberNotAvailable: "Mobile number not available",
                    more: "MORE",
                    forgotPassword: "Forgot Password",
                    validatePin: "Validate Pin"
                }
            }
        },
        9946: function() {
            !function(e) {
                e(document).on("click", "[data-trigger='modal'], [data-trigger='nifty']", (function() {
                    var t = e(this).data("target");
                    return e(t).nifty("show"),
                    !1
                }
                )),
                e(document).on("click", ".md-overlay", (function(t) {
                    return t.stopPropagation(),
                    e(this).prev().data("isnotcloseoverlay") || e(".nifty-modal.md-show").nifty("hide"),
                    !1
                }
                )),
                e(document).on("click", ".nifty-modal.md-show .md-close", (function(t) {
                    return t.stopPropagation(),
                    e(this).closest(".nifty-modal.md-show").nifty("hide"),
                    !1
                }
                )),
                e.fn.extend({
                    nifty: function(t) {
                        var n, a = this, o = "transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd";
                        return "show" == t ? (n = !1,
                        e(a).trigger("show.nifty.modal"),
                        e(a).one(o, (function(t) {
                            n || (n = !0,
                            t.preventDefault(),
                            t.stopPropagation(),
                            e(a).trigger("shown.nifty.modal"))
                        }
                        )),
                        e(a).addClass("md-show")) : "hide" == t && function() {
                            var t = !1;
                            e(a).trigger("hide.nifty.modal"),
                            e(a).one(o, (function(n) {
                                t || (t = !0,
                                n.preventDefault(),
                                n.stopPropagation(),
                                e(a).trigger("hidden.nifty.modal"))
                            }
                            )),
                            e(a).removeClass("md-show")
                        }(),
                        this
                    }
                })
            }(jQuery)
        },
        4401: function() {
            $(document).on("click", ".profile-head .mdc-tab-bar .mdc-tab", (function(e) {
                e.preventDefault(),
                e.stopPropagation(),
                $(".profile-head .mdc-tab-bar .mdc-tab").removeClass("active"),
                $(".profile-head .mdc-tab-bar .mdc-tab .mdc-tab-indicator").removeClass("active"),
                $(this).addClass("active"),
                $(this).children(".mdc-tab-indicator").addClass("active");
                var t = $(this).data("tabname");
                switch ($(".profile-head .outlet .tab-pane").html(""),
                t) {
                case "edit":
                    xhr_get("/ajaxprofileEdit").done((function(e) {
                        $(".profile-head .outlet .tab-pane").html(e)
                    }
                    ));
                    break;
                case "change-password":
                    xhr_get("/ajaxchgPass").done((function(e) {
                        $(".profile-head .outlet .tab-pane").html(e)
                    }
                    ));
                    break;
                case "suspend-account":
                    xhr_get("/ajaxsuspendAccount").done((function(e) {
                        $(".profile-head .outlet .tab-pane").html(e)
                    }
                    ));
                    break;
                case "deposit-limit":
                    xhr_get("/ajaxdepositLimit").done((function(e) {
                        $(".profile-head .outlet .tab-pane").html(e)
                    }
                    ));
                    break;
                case "my-bonus":
                    xhr_get("/ajaxmyBonus").done((function(e) {
                        $(".profile-head .outlet .tab-pane").html(e)
                    }
                    ));
                    break;
                case "my-promo":
                    xhr_get("/ajaxmyPromo").done((function(e) {
                        $(".profile-head .outlet .tab-pane").html(e)
                    }
                    ));
                    break;
                case "my-withdraw-to":
                    xhr_get("/ajaxmyTurnover").done((function(e) {
                        $(".profile-head .outlet .tab-pane").html(e)
                    }
                    ))
                }
                return !1
            }
            ))
        },
        4402: function() {
            function e(e) {
                var t = e.responseText;
                if (e.responseJSON && e.responseJSON.message)
                    t = e.responseJSON.message;
                else
                    try {
                        if (e.responseText) {
                            var n = JSON.parse(e.responseText);
                            n.message && (t = n.message)
                        }
                    } catch (e) {}
                sweetAlert(t)
            }
            function t(t) {
                showLoadingImgFn();
                var n = "/load_check_in_popup?type=" + t;
                $.get(n, (function(e) {
                    $(".reward-program-popup").html(e),
                    $("#checkin-modal--layout").nifty("show"),
                    removeLoadingImgFn()
                }
                )).fail((function(t, n, a) {
                    removeLoadingImgFn(),
                    e(t)
                }
                ))
            }
            function n(t) {
                showLoadingImgFn();
                var n = "/ajax_wheel_data?type=" + t;
                $.get(n, (function(e) {
                    (e.status = "s") ? ($("#spin-wheel-modal--layout").nifty("show"),
                    function(e, t, n, a) {
                        for (var o = 0, i = function() {
                            ++o == e.length && t(n, a)
                        }, s = 0; s < e.length; s++) {
                            var l = new Image;
                            l.addEventListener("load", i),
                            l.src = e[s],
                            r.push(l)
                        }
                    }(i, s, e.data, t)) : sweetAlert(e.msg),
                    removeLoadingImgFn()
                }
                )).fail((function(t, n, a) {
                    removeLoadingImgFn(),
                    e(t)
                }
                ))
            }
            function a(t, n, a) {
                setTimeout((function() {
                    !function(t, n, a) {
                        var o = "/load_claimed_reward_popup?message=" + t + "&extra_message=" + n + "&rewards_type=" + a;
                        $.get(o, (function(e) {
                            $(".claimed-reward-popup").html(e),
                            $("#reward-modal--layout").nifty("show"),
                            $("#checkin-modal--layout").nifty("hide"),
                            $("#spin-wheel-modal--layout").nifty("hide")
                        }
                        )).fail((function(t, n, a) {
                            e(t)
                        }
                        ))
                    }(t, n, a)
                }
                ), 3e3)
            }
            function o(t) {
                showLoadingImgFn();
                var n = "/claim_reward?type=" + t;
                return new Promise((function(t, a) {
                    $.get(n, (function(e) {
                        t(e),
                        removeLoadingImgFn()
                    }
                    )).fail((function(t, n, a) {
                        removeLoadingImgFn(),
                        e(t)
                    }
                    ))
                }
                ))
            }
            $(document).on("click", ".lucky-draw-head .mdc-tab-bar .mdc-tab", (function(e) {
                e.preventDefault(),
                e.stopPropagation(),
                $(".lucky-draw-head .mdc-tab-bar .mdc-tab").removeClass("active"),
                $(".lucky-draw-head .mdc-tab-bar .mdc-tab .mdc-tab-indicator").removeClass("active"),
                $(".lucky-draw-head .mdc-tab-bar .mdc-tab--active").removeClass("mdc-tab--active"),
                $(".lucky-draw-head .mdc-tab-bar .mdc-tab .mdc-tab-indicator--active").removeClass("mdc-tab-indicator--active"),
                $(this).addClass("active"),
                $(this).children(".mdc-tab-indicator").addClass("active");
                var t = $(this).data("tabname");
                switch ($(".lucky-draw-head .outlet .tab-pane").html(""),
                t) {
                default:
                case "prizes":
                    xhr_get("/ajaxTicketInfo").done((function(e) {
                        $(".lucky-draw-head .outlet .tab-pane").html(e)
                    }
                    ));
                    break;
                case "how-to-win":
                    xhr_get("/ajaxHowToWin").done((function(e) {
                        $(".lucky-draw-head .outlet .tab-pane").html(e)
                    }
                    ));
                    break;
                case "my-prizes":
                    xhr_get("/ajaxPrize").done((function(e) {
                        $(".lucky-draw-head .outlet .tab-pane").html(e)
                    }
                    ))
                }
                return !1
            }
            )),
            $(document).on("click", ".loyalty-mega-prize-head .mdc-tab-bar .mdc-tab", (function(e) {
                e.preventDefault(),
                e.stopPropagation(),
                $(".loyalty-mega-prize-head .mdc-tab-bar .mdc-tab").removeClass("active"),
                $(".loyalty-mega-prize-head .mdc-tab-bar .mdc-tab .mdc-tab-indicator").removeClass("active"),
                $(".loyalty-mega-prize-head .mdc-tab-bar .mdc-tab--active").removeClass("mdc-tab--active"),
                $(".loyalty-mega-prize-head .mdc-tab-bar .mdc-tab .mdc-tab-indicator--active").removeClass("mdc-tab-indicator--active"),
                $(this).addClass("active"),
                $(this).children(".mdc-tab-indicator").addClass("active");
                var t = $(this).data("tabname");
                switch ($(".loyalty-mega-prize-head .outlet .tab-pane").html(""),
                t) {
                default:
                case "prizes":
                    xhr_get("/ajaxPrizes").done((function(e) {
                        $(".loyalty-mega-prize-head .outlet .tab-pane").html(e)
                    }
                    ));
                    break;
                case "redemption":
                    xhr_get("/ajaxRedemption").done((function(e) {
                        $(".loyalty-mega-prize-head .outlet .tab-pane").html(e)
                    }
                    ))
                }
                return !1
            }
            )),
            $(document).on("click", "#btn-close--checkin-modal", (function() {
                return $("#checkin-modal--layout").nifty("hide"),
                !1
            }
            )),
            $(document).on("click", "#btn-close--reward-modal", (function() {
                return $("#reward-modal--layout").nifty("hide"),
                !1
            }
            )),
            $(document).on("click", "#btn-close--spin-wheel-modal", (function() {
                return $("#spin-wheel-modal--layout").nifty("hide"),
                !1
            }
            )),
            $(document).on("click", "#btn-close--redeem-ticket-modal", (function() {
                return $("#redeem-ticket-modal--layout").nifty("hide"),
                !1
            }
            )),
            $(document).on("click", "#redeem-ticket-btn", (function() {
                return showLoadingImgFn(),
                $.get("/load_redeem_ticket_popup", (function(e) {
                    $(".redeem-ticket-popup").html(e),
                    $("#redeem-ticket-modal--layout").nifty("show"),
                    removeLoadingImgFn()
                }
                )).fail((function(t, n, a) {
                    removeLoadingImgFn(),
                    e(t)
                }
                )),
                !1
            }
            )),
            $(document).on("click", "#mega-prize-check-in-btn", (function() {
                return t("mega-prize"),
                !1
            }
            )),
            $(document).on("click", "#check-in-btn", (function() {
                return t("lucky-draw"),
                !1
            }
            )),
            $(document).on("click", "#check-in-lucky-draw", (function() {
                return t("lucky-draw"),
                !1
            }
            )),
            $(document).on("click", "#check-in-mega-prize", (function() {
                return t("mega-prize"),
                !1
            }
            )),
            $(document).on("click", "#close-check-in-popup", (function() {
                return document.getElementById("check-in-programs-popup").style.display = "none",
                !1
            }
            )),
            $(document).on("click", ".btn-refresh-reward", (function() {
                var e = this;
                return $(this).prop("disabled", !0),
                $(".reward-btn-silver-txt").text(""),
                $(".reward-btn-gold-txt").text(""),
                $(".reward-btn-silver-txt").addClass("loader"),
                $(".reward-btn-gold-txt").addClass("loader"),
                json_get("/get_reward_balance").done((function(t) {
                    $(".reward-btn-silver-txt").removeClass("loader"),
                    $(".reward-btn-silver-txt").text(t.data.silver_coins),
                    $(".reward-btn-gold-txt").removeClass("loader"),
                    $(".reward-btn-gold-txt").text(t.data.gold_coins),
                    $(e).prop("disabled", !1)
                }
                )).fail((function() {
                    $(".reward-btn-silver-txt").removeClass("loader"),
                    $(".reward-btn-gold-txt").removeClass("loader"),
                    $(e).prop("disabled", !1)
                }
                )),
                !1
            }
            )),
            $(document).on("click", "#spin-btn", (function() {
                return $("#checkin-modal--layout").nifty("hide"),
                n("lucky-draw"),
                !1
            }
            )),
            $(document).on("click", "#spin-mega-prize-btn", (function() {
                return $("#checkin-modal--layout").nifty("hide"),
                n("mega-prize"),
                !1
            }
            )),
            $(document).on("click", "#claim-btn", (function() {
                return $("#checkin-modal--layout").nifty("hide"),
                o("lucky-draw").then((function(e) {
                    return result = e,
                    a(result.message, result.data.extra_message, result.data.rewards_type),
                    result
                }
                )),
                !1
            }
            )),
            $(document).on("click", "#claim-mega-prize-btn", (function() {
                return $("#checkin-modal--layout").nifty("hide"),
                o("mega-prize").then((function(e) {
                    return result = e,
                    a(result.message, result.data.extra_message, result.data.rewards_type),
                    result
                }
                )),
                !1
            }
            )),
            $(document).on("click", "#redeem-btn", (function() {
                $("#redeem-btn").prop("disabled", !0),
                showLoadingImgFn();
                var t = "/ajax_redeem_ticket?qty=" + document.getElementById("ticket-qty").innerText;
                return $.get(t, (function(e) {
                    removeLoadingImgFn(),
                    sweetAlert(e.message, "success", "Success"),
                    location.reload()
                }
                )).fail((function(t, n, a) {
                    removeLoadingImgFn(),
                    e(t)
                }
                )),
                !1
            }
            )),
            $(document).on("click", "#minus-btn", (function() {
                var e = document.getElementById("ticket-qty").innerText
                  , t = parseInt(e) - 1;
                return t > 0 ? (document.getElementById("ticket-qty").innerText = t,
                $("#redeem-btn").prop("disabled", !1),
                $("#add-btn").hasClass("disabledBtn") && $("#add-btn").removeClass("disabledBtn"),
                $("#minus-btn").hasClass("disabledBtn") && $("#minus-btn").removeClass("disabledBtn")) : ($("#redeem-btn").prop("disabled", !0),
                $("#minus-btn").addClass("disabledBtn")),
                !1
            }
            )),
            $(document).on("click", "#add-btn", (function() {
                var e = document.getElementById("ticket-qty").innerText
                  , t = parseInt(e) + 1;
                return t <= document.getElementById("available_claim").value ? (document.getElementById("ticket-qty").innerText = t,
                $("#redeem-btn").prop("disabled", !1),
                $("#minus-btn").hasClass("disabledBtn") && $("#minus-btn").removeClass("disabledBtn"),
                $("#add-btn").hasClass("disabledBtn") && $("#add-btn").removeClass("disabledBtn")) : ($("#redeem-btn").prop("disabled", !0),
                $("#add-btn").addClass("disabledBtn")),
                !1
            }
            ));
            var i = ["https://files.sitestatic.net/assets/imgs/rewards/silver_coin.webp?v=0.1", "https://files.sitestatic.net/assets/imgs/rewards/gold_coin.webp?v=0.1"]
              , r = [];
            function s(e, t) {
                if (document.querySelector("#wheelCanvas")) {
                    for (var n = [], a = 0; a < e.length; a++)
                        e[a].color = (a + 1) % 2 == 0 ? "#fff" : "#000",
                        e[a].bgColor = (a + 1) % 2 == 0 ? "#ee7b30" : "#fefdfa",
                        n.push(e[a]);
                    l(n, r)
                }
                document.getElementById("spin_wheel_type") && (document.getElementById("spin_wheel_type").value = t)
            }
            var l = function(t, n) {
                console.log("loaded img ", n);
                var o = t.length
                  , i = document.querySelector("#wheelCanvas").getContext("2d")
                  , r = i.canvas.width / 2
                  , s = Math.PI
                  , l = 2 * s
                  , c = l / o
                  , d = 0
                  , u = !1
                  , m = null
                  , h = []
                  , f = 0
                  , p = null
                  , g = null
                  , b = function() {
                    var e = d - s / 2;
                    i.canvas.style.transform = "rotate(".concat(e, "rad)");
                    var t = (Math.round(100 * d) / 100).toFixed(2);
                    if (null !== p) {
                        var n = Math.abs(p - Number(t));
                        p > Number(t) && n > .5 && (f++,
                        console.log("runningRound -> ", f))
                    }
                    p = Number(t)
                }
                  , v = 0
                  , w = null
                  , k = 0
                  , y = 0
                  , x = 0
                  , C = function e(t) {
                    if (u) {
                        x || (x = t);
                        var n = (t - x) / 1e3
                          , o = Math.min(n / y, 1)
                          , i = 1 - Math.pow(1 - o, 3);
                        d = (v + k * l * i + w) % l,
                        b(),
                        o < 1 ? m = requestAnimationFrame(e) : (u = !1,
                        cancelAnimationFrame(m),
                        a(g.message, g.data.extra_message, g.data.hit_prize.item))
                    }
                };
                document.querySelector("#spinBtn").addEventListener("click", (function() {
                    var t, n, a;
                    u || (document.getElementById("spinBtn").disabled = !0,
                    (t = document.getElementById("seq").value,
                    n = document.getElementById("spin_wheel_type").value,
                    a = "/spin_wheel_result?today_sequence=" + t + "&type=" + n,
                    new Promise((function(t, n) {
                        $.get(a, (function(e) {
                            t(e)
                        }
                        )).fail((function(t, n, a) {
                            e(t)
                        }
                        ))
                    }
                    ))).then((function(e) {
                        g = e;
                        var t = h.find((function(e) {
                            return e.id === g.data.hit_prize.item_seq
                        }
                        ));
                        w = (t.startAng + t.endAng) / 2,
                        k = 6,
                        y = 5,
                        v = d,
                        u = !0,
                        x = 0,
                        m = requestAnimationFrame(C)
                    }
                    )))
                }
                )),
                t.forEach((function(e, t) {
                    var a = c * t;
                    i.save();
                    var o, s, l, d = 1;
                    switch (e.item_seq) {
                    case 1:
                        d = 10;
                        break;
                    case 2:
                        d = 9;
                        break;
                    case 3:
                        d = 8;
                        break;
                    case 4:
                        d = 7;
                        break;
                    case 5:
                        d = 6;
                        break;
                    case 6:
                        d = 5;
                        break;
                    case 7:
                        d = 4;
                        break;
                    case 8:
                        d = 3;
                        break;
                    case 9:
                        d = 2;
                        break;
                    case 10:
                        d = 1
                    }
                    if (h.push({
                        id: d,
                        startAng: a,
                        endAng: a + c
                    }),
                    i.beginPath(),
                    i.fillStyle = e.bgColor,
                    i.moveTo(r, r),
                    i.arc(r, r, r, a, a + c),
                    i.lineTo(r, r),
                    i.fill(),
                    i.translate(r, r),
                    i.rotate(a + c / 2),
                    i.textAlign = "right",
                    i.fillStyle = e.color,
                    i.font = "14px sans-serif",
                    1 === Number(e.item_id) || 2 === Number(e.item_id)) {
                        var u = r - 55;
                        i.fillText((o = e.amount,
                        s = Math.abs(o),
                        l = Math.sign(o),
                        s >= 1e12 ? l * (s / 1e12).toFixed(1) + "T" : s >= 1e9 ? l * (s / 1e9).toFixed(1) + "B" : s >= 1e6 ? l * (s / 1e6).toFixed(1) + "M" : s >= 1e3 ? l * (s / 1e3).toFixed(1) + "K" : l * s), u, 5),
                        1 === Number(e.item_id) ? i.drawImage(n[0], u + 5, -15, 26, 26) : i.drawImage(n[1], u + 5, -15, 26, 26)
                    } else if (4 === Number(e.item_id)) {
                        var m = e.item.split(" ");
                        i.fillText(m[0] + " " + m[1], r - 20, 5),
                        i.fillText(m[2], r - 40, 20)
                    } else
                        i.fillText(e.item, r - 30, 10);
                    i.restore()
                }
                )),
                b()
            }
        },
        9431: function() {
            $(document).on("click", "#right-button", (function() {
                return event.preventDefault(),
                $(".slider-content").animate({
                    scrollLeft: "+=300px"
                }, "fast"),
                !1
            }
            )),
            $(document).on("click", "#left-button", (function() {
                return event.preventDefault(),
                $(".slider-content").animate({
                    scrollLeft: "-=300px"
                }, "fast"),
                !1
            }
            )),
            $(window).bind("load", (function() {
                var e = $(".popular-game-slider").find("ul")
                  , t = e.width()
                  , n = 1;
                setInterval((function() {
                    n >= e.data("count") ? (n = 1,
                    e.animate({
                        scrollLeft: "-=" + e.data("count") * t + "px"
                    }, "fast")) : (n++,
                    e.animate({
                        scrollLeft: "+=" + t + "px"
                    }, "fast"))
                }
                ), 1500),
                $(".g-slider-wrapper .js-btn-next").on("click", (function() {
                    n++;
                    var e = $(this).parents(".g-slider-wrapper").find("ul")
                      , t = e.width();
                    return e.animate({
                        scrollLeft: "+=" + t + "px"
                    }, "fast"),
                    !1
                }
                )),
                $(".g-slider-wrapper .js-btn-prev").on("click", (function() {
                    n--;
                    var e = $(this).parents(".g-slider-wrapper").find("ul")
                      , t = e.width();
                    return e.animate({
                        scrollLeft: "-=" + t + "px"
                    }, "fast"),
                    !1
                }
                ))
            }
            )),
            $((function() {
                var e, t, n = $(".js-cycling-gallery ul"), a = n.find("li"), o = n.data("count"), i = 1, r = -1 * a.width(), s = r * o, l = !1, c = 0, d = 0;
                if (n.length > 0) {
                    var u = $(".js-cycling-btn");
                    n.css({
                        left: s
                    }),
                    console.log("gallery startPos", s),
                    u.on("click", (function() {
                        f($(this).data("action"), 5)
                    }
                    )),
                    setInterval((function() {
                        l || f("next", 1)
                    }
                    ), 1300),
                    n.on("touchstart", (function(t) {
                        l = !0,
                        (t = t || window.event).preventDefault(),
                        e = parseFloat(n.css("left")),
                        "touchstart" == t.type ? c = t.touches[0].clientX : (c = t.clientX,
                        document.onmouseup = h,
                        document.onmousemove = m)
                    }
                    )),
                    n.on("touchend", h),
                    n.on("touchmove", m)
                }
                function m(e) {
                    e = e || window.event,
                    l = !0,
                    "touchmove" == e.type ? (d = c - e.touches[0].clientX,
                    c = e.touches[0].clientX) : (d = c - e.clientX,
                    c = e.clientX),
                    n.css({
                        left: parseFloat(n.css("left")) - d + "px"
                    })
                }
                function h(a) {
                    t = parseFloat(n.css("left"));
                    var o = Math.round((t - e) / r);
                    o <= -1 ? f("next", Math.abs(o)) : o >= 1 ? f("next", o) : n.css({
                        left: e + "px"
                    }),
                    document.onmouseup = null,
                    document.onmousemove = null,
                    l = !1
                }
                function f(e, t) {
                    t || (t = 1);
                    var a = "prev" === e ? -t : t;
                    n.animate({
                        left: "+=" + r * a
                    }, (function() {
                        !!(0 === (i += a) || i > o) && (i = 0 === i ? o : 1,
                        n.css({
                            left: r * (i + 1)
                        }))
                    }
                    ))
                }
            }
            )),
            $((function() {
                var e, t, n = $(".js-cycling-gallery-royal-hotgame ul"), a = n.find("li"), o = n.data("count") - 3, i = 1, r = -1 * a.width(), s = !1, l = 0, c = 0;
                if (n.length > 0) {
                    var d = $(".js-cycling-btn");
                    n.css({
                        left: 0
                    }),
                    console.log("gallery startPos", 0),
                    d.on("click", (function() {
                        h($(this).data("action"), 5)
                    }
                    )),
                    setInterval((function() {
                        s || h("next", 1)
                    }
                    ), 3300),
                    n.on("touchstart", (function(t) {
                        s = !0,
                        (t = t || window.event).preventDefault(),
                        e = parseFloat(n.css("left")),
                        "touchstart" == t.type ? l = t.touches[0].clientX : (l = t.clientX,
                        document.onmouseup = m,
                        document.onmousemove = u)
                    }
                    )),
                    n.on("touchend", m),
                    n.on("touchmove", u)
                }
                function u(e) {
                    e = e || window.event,
                    s = !0,
                    "touchmove" == e.type ? (c = l - e.touches[0].clientX,
                    l = e.touches[0].clientX) : (c = l - e.clientX,
                    l = e.clientX),
                    n.css({
                        left: parseFloat(n.css("left")) - c + "px"
                    })
                }
                function m(a) {
                    t = parseFloat(n.css("left"));
                    var o = Math.round((t - e) / r);
                    o <= -1 ? h("next", Math.abs(o)) : o >= 1 ? h("next", o) : n.css({
                        left: e + "px"
                    }),
                    document.onmouseup = null,
                    document.onmousemove = null,
                    s = !1
                }
                function h(e, t) {
                    t || (t = 1);
                    var a = "prev" === e ? -t : t;
                    n.animate({
                        left: "+=" + r * a
                    }, (function() {
                        !!(0 === (i += a) || i > o) && (i = 0 === i ? o : 1,
                        n.css({
                            left: r * (i + 1)
                        }))
                    }
                    ))
                }
            }
            )),
            $((function() {
                var e, t, n = $(".js-cycling-gallery-neo ul"), a = n.find("li"), o = n.data("count"), i = 1, r = -1 * a.width(), s = r * o, l = !1, c = 0, d = 0;
                if (n.length > 0) {
                    var u = $(".js-cycling-btn");
                    n.css({
                        left: s
                    }),
                    console.log("gallery startPos 22", s, o),
                    u.on("click", (function() {
                        f($(this).data("action"), 1)
                    }
                    )),
                    setInterval((function() {
                        l || f("next", 1)
                    }
                    ), 2e3),
                    n.on("touchstart", (function(t) {
                        l = !0,
                        (t = t || window.event).preventDefault(),
                        e = parseFloat(n.css("left")),
                        "touchstart" == t.type ? c = t.touches[0].clientX : (c = t.clientX,
                        document.onmouseup = h,
                        document.onmousemove = m)
                    }
                    )),
                    n.on("touchend", h),
                    n.on("touchmove", m)
                }
                function m(e) {
                    e = e || window.event,
                    l = !0,
                    "touchmove" == e.type ? (d = c - e.touches[0].clientX,
                    c = e.touches[0].clientX) : (d = c - e.clientX,
                    c = e.clientX),
                    n.css({
                        left: parseFloat(n.css("left")) - d + "px"
                    })
                }
                function h(a) {
                    t = parseFloat(n.css("left"));
                    var o = Math.round((t - e) / r);
                    o <= -1 ? f("next", Math.abs(o)) : o >= 1 ? f("next", o) : n.css({
                        left: e + "px"
                    }),
                    document.onmouseup = null,
                    document.onmousemove = null,
                    l = !1
                }
                function f(e, t) {
                    t || (t = 1);
                    var a = "prev" === e ? -t : t;
                    console.log("delta" + a),
                    n.animate({
                        left: "+=" + (r - 27) * a
                    }, (function() {
                        !!(0 === (i += a) || i > o) && (i = 0 === i ? o : 1,
                        n.css({
                            left: (r - 27) * (i + 1)
                        }))
                    }
                    ))
                }
            }
            )),
            $((function() {
                var e, t, n = $(".js-cycling-widthdraw-horizontal ul"), a = n.find("li"), o = n.data("count"), i = 1, r = -1 * a.width(), s = r * o, l = !1, c = 0, d = 0;
                if (n.length > 0) {
                    var u = $(".js-cycling-btn");
                    n.css({
                        left: s
                    }),
                    console.log("gallery startPos", s),
                    u.on("click", (function() {
                        f($(this).data("action"), 5)
                    }
                    )),
                    setInterval((function() {
                        l || f("next", 1)
                    }
                    ), 1300),
                    n.on("touchstart", (function(t) {
                        l = !0,
                        (t = t || window.event).preventDefault(),
                        e = parseFloat(n.css("left")),
                        "touchstart" == t.type ? c = t.touches[0].clientX : (c = t.clientX,
                        document.onmouseup = h,
                        document.onmousemove = m)
                    }
                    )),
                    n.on("touchend", h),
                    n.on("touchmove", m)
                }
                function m(e) {
                    e = e || window.event,
                    l = !0,
                    "touchmove" == e.type ? (d = c - e.touches[0].clientX,
                    c = e.touches[0].clientX) : (d = c - e.clientX,
                    c = e.clientX),
                    n.css({
                        left: parseFloat(n.css("left")) - d + "px"
                    })
                }
                function h(a) {
                    t = parseFloat(n.css("left"));
                    var o = Math.round((t - e) / r);
                    o <= -1 ? f("next", Math.abs(o)) : o >= 1 ? f("next", o) : n.css({
                        left: e + "px"
                    }),
                    document.onmouseup = null,
                    document.onmousemove = null,
                    l = !1
                }
                function f(e, t) {
                    t || (t = 1);
                    var a = "prev" === e ? -t : t;
                    n.animate({
                        left: "+=" + r * a
                    }, (function() {
                        !!(0 === (i += a) || i > o) && (i = 0 === i ? o : 1,
                        n.css({
                            left: r * (i + 1)
                        }))
                    }
                    ))
                }
            }
            )),
            $((function() {
                var e, t, n = $(".js-cycling-widthdraw ul"), a = n.find("li"), o = n.data("count"), i = 1, r = -1 * a.height(), s = !1, l = 0, c = 0;
                if (n.length > 0 && o > 3) {
                    var d = $(".js-cycling-btn");
                    n.css({
                        top: 0
                    }),
                    console.log("widthdraw startPos", 0),
                    d.on("click", (function() {
                        h($(this).data("action"), 5)
                    }
                    )),
                    setInterval((function() {
                        s || h("next", 1)
                    }
                    ), 1300),
                    n.on("touchstart", (function(t) {
                        s = !0,
                        (t = t || window.event).preventDefault(),
                        e = parseFloat(n.css("top")),
                        "touchstart" == t.type ? l = t.touches[0].clientX : (l = t.clientX,
                        document.onmouseup = m,
                        document.onmousemove = u)
                    }
                    )),
                    n.on("touchend", m),
                    n.on("touchmove", u)
                }
                function u(e) {
                    e = e || window.event,
                    s = !0,
                    "touchmove" == e.type ? (c = l - e.touches[0].clientX,
                    l = e.touches[0].clientX) : (c = l - e.clientX,
                    l = e.clientX),
                    n.css({
                        top: parseFloat(n.css("top")) - c + "px"
                    })
                }
                function m(a) {
                    t = parseFloat(n.css("top"));
                    var o = Math.round((t - e) / r);
                    o <= -1 ? h("next", Math.abs(o)) : o >= 1 ? h("next", o) : n.css({
                        top: e + "px"
                    }),
                    document.onmouseup = null,
                    document.onmousemove = null,
                    s = !1
                }
                function h(e, t) {
                    t || (t = 1);
                    var a = "prev" === e ? -t : t;
                    n.animate({
                        top: "+=" + r * a
                    }, (function() {
                        !!(0 === (i += a) || i > o) && (i = 0 === i ? o : 1,
                        n.css({
                            top: r * (i + 1)
                        }))
                    }
                    ))
                }
            }
            )),
            $((function() {
                var e, t, n = $(".js-cycling-deposit ul"), a = n.find("li"), o = n.data("count"), i = 1, r = -1 * a.height(), s = r * o, l = !1, c = 0, d = 0;
                if (n.length > 0) {
                    var u = $(".js-cycling-btn");
                    n.css({
                        top: s
                    }),
                    console.log("deposit startPos", s),
                    u.on("click", (function() {
                        f($(this).data("action"), 5)
                    }
                    )),
                    setInterval((function() {
                        l || f("next", 1)
                    }
                    ), 1300),
                    n.on("touchstart", (function(t) {
                        l = !0,
                        (t = t || window.event).preventDefault(),
                        e = parseFloat(n.css("top")),
                        "touchstart" == t.type ? c = t.touches[0].clientX : (c = t.clientX,
                        document.onmouseup = h,
                        document.onmousemove = m)
                    }
                    )),
                    n.on("touchend", h),
                    n.on("touchmove", m)
                }
                function m(e) {
                    e = e || window.event,
                    l = !0,
                    "touchmove" == e.type ? (d = c - e.touches[0].clientX,
                    c = e.touches[0].clientX) : (d = c - e.clientX,
                    c = e.clientX),
                    n.css({
                        top: parseFloat(n.css("top")) - d + "px"
                    })
                }
                function h(a) {
                    t = parseFloat(n.css("top"));
                    var o = Math.round((t - e) / r);
                    o <= -1 ? f("next", Math.abs(o)) : o >= 1 ? f("next", o) : n.css({
                        top: e + "px"
                    }),
                    document.onmouseup = null,
                    document.onmousemove = null,
                    l = !1
                }
                function f(e, t) {
                    t || (t = 1);
                    var a = "prev" === e ? -t : t;
                    n.animate({
                        top: "+=" + r * a
                    }, (function() {
                        !!(0 === (i += a) || i > o) && (i = 0 === i ? o : 1,
                        n.css({
                            top: r * (i + 1)
                        }))
                    }
                    ))
                }
            }
            )),
            $(window).bind("load", (function() {
                $(".js-cycling-gallery-ams").each((function(e, t) {
                    var n = $(this).find("ul")
                      , a = n.find("li")
                      , o = n.data("count")
                      , i = 1
                      , r = -1 * a.width()
                      , s = !1;
                    console.log("item li width ", a.width());
                    var l, c, d = 0, u = 0;
                    if (n.length > 0) {
                        var m = $(this).find(".js-cycling-btn");
                        n.css({
                            left: 0
                        }),
                        console.log("gallery startPos 22", 0, o),
                        m.on("click", (function() {
                            p($(this).data("action"), 1)
                        }
                        )),
                        setInterval((function() {
                            s || p("next", 1)
                        }
                        ), 2500),
                        n.on("touchstart", (function(e) {
                            s = !0,
                            e = e || window.event,
                            l = parseFloat(n.css("left")),
                            "touchstart" == e.type ? d = e.touches[0].clientX : (d = e.clientX,
                            document.onmouseup = f,
                            document.onmousemove = h)
                        }
                        )),
                        n.on("touchend", f),
                        n.on("touchmove", h)
                    }
                    function h(e) {
                        e = e || window.event,
                        s = !0,
                        "touchmove" == e.type ? (u = d - e.touches[0].clientX,
                        d = e.touches[0].clientX) : (u = d - e.clientX,
                        d = e.clientX),
                        n.css({
                            left: parseFloat(n.css("left")) - u + "px"
                        })
                    }
                    function f(e) {
                        c = parseFloat(n.css("left"));
                        var t = Math.round((c - l) / r);
                        t <= -1 ? p("next", Math.abs(t)) : t >= 1 ? p("next", t) : n.css({
                            left: l + "px"
                        }),
                        document.onmouseup = null,
                        document.onmousemove = null,
                        s = !1
                    }
                    function p(e, t) {
                        t || (t = 1);
                        var a = "prev" === e ? -t : t;
                        n.animate({
                            left: "+=" + (r - 27) * a
                        }, (function() {
                            !!(0 === (i += a) || i > o + 1) && (i = 0 === i ? o : 1,
                            n.css({
                                left: 0
                            }))
                        }
                        ))
                    }
                }
                ))
            }
            )),
            window.onixHkbLotteryResultsCarousel = function() {
                $(".js-cycling-gallery-onix").each((function(e, t) {
                    var n = $(this).find("ul")
                      , a = n.find("li")
                      , o = n.data("count")
                      , i = 1
                      , r = -1 * a.width()
                      , s = !1;
                    console.log("item li width ", a.width());
                    var l, c, d = 0, u = 0;
                    if (n.length > 0) {
                        var m = $(this).find(".js-cycling-btn");
                        n.css({
                            left: 0
                        }),
                        console.log("gallery startPos 10", 0, o),
                        m.on("click", (function() {
                            p($(this).data("action"), 1)
                        }
                        )),
                        setInterval((function() {
                            s || p("next", 1)
                        }
                        ), 2500),
                        n.on("touchstart", (function(e) {
                            s = !0,
                            e = e || window.event,
                            l = parseFloat(n.css("left")),
                            "touchstart" == e.type ? d = e.touches[0].clientX : (d = e.clientX,
                            document.onmouseup = f,
                            document.onmousemove = h)
                        }
                        )),
                        n.on("touchend", f),
                        n.on("touchmove", h)
                    }
                    function h(e) {
                        e = e || window.event,
                        s = !0,
                        "touchmove" == e.type ? (u = d - e.touches[0].clientX,
                        d = e.touches[0].clientX) : (u = d - e.clientX,
                        d = e.clientX),
                        n.css({
                            left: parseFloat(n.css("left")) - u + "px"
                        })
                    }
                    function f(e) {
                        c = parseFloat(n.css("left"));
                        var t = Math.round((c - l) / r);
                        t <= -1 ? p("next", Math.abs(t)) : t >= 1 ? p("next", t) : n.css({
                            left: l + "px"
                        }),
                        document.onmouseup = null,
                        document.onmousemove = null,
                        s = !1
                    }
                    function p(e, t) {
                        t || (t = 1);
                        var a = "prev" === e ? -t : t;
                        n.animate({
                            left: "+=" + (r - 2) * a
                        }, (function() {
                            !!(0 === (i += a) || i > o + 1) && (i = 0 === i ? o : 1,
                            n.css({
                                left: (r - 2) * (i + 1)
                            }))
                        }
                        ))
                    }
                }
                ))
            }
            ,
            $(window).bind("load", (function() {
                $(".js-cycling-gallery-royal").each((function(e, t) {
                    var n = $(this).find("ul")
                      , a = n.find("li")
                      , o = n.data("count")
                      , i = 1
                      , r = -1 * a.width()
                      , s = !1;
                    console.log("item li width ", a.width());
                    var l, c, d = 0, u = 0;
                    if (n.length > 0) {
                        var m = $(this).find(".js-cycling-btn");
                        n.css({
                            left: 0
                        }),
                        console.log("gallery startPos 22", 0, o),
                        m.on("click", (function() {
                            p($(this).data("action"), 1)
                        }
                        )),
                        setInterval((function() {
                            s || p("next", 1)
                        }
                        ), 4e3),
                        n.on("touchstart", (function(e) {
                            s = !0,
                            e = e || window.event,
                            l = parseFloat(n.css("left")),
                            "touchstart" == e.type ? d = e.touches[0].clientX : (d = e.clientX,
                            document.onmouseup = f,
                            document.onmousemove = h)
                        }
                        )),
                        n.on("touchend", f),
                        n.on("touchmove", h)
                    }
                    function h(e) {
                        e = e || window.event,
                        s = !0,
                        "touchmove" == e.type ? (u = d - e.touches[0].clientX,
                        d = e.touches[0].clientX) : (u = d - e.clientX,
                        d = e.clientX),
                        n.css({
                            left: parseFloat(n.css("left")) - u + "px"
                        })
                    }
                    function f(e) {
                        c = parseFloat(n.css("left"));
                        var t = Math.round((c - l) / r);
                        t <= -1 ? p("next", Math.abs(t)) : t >= 1 ? p("next", t) : n.css({
                            left: l + "px"
                        }),
                        document.onmouseup = null,
                        document.onmousemove = null,
                        s = !1
                    }
                    function p(e, t) {
                        t || (t = 1);
                        var a = "prev" === e ? -t : t;
                        n.animate({
                            left: "+=" + (r - 27) * a
                        }, (function() {
                            !!(0 === (i += a) || i > o + 1) && (i = 0 === i ? o : 1,
                            n.css({
                                left: 0
                            }))
                        }
                        ))
                    }
                }
                ))
            }
            )),
            $(window).bind("load", (function() {
                var e = $(".js-cycling-gallery-olympus .custom-slider")
                  , t = e.find("ul")
                  , n = e.data("count")
                  , a = 1
                  , o = -1 * t.width()
                  , i = !1;
                console.log("item li width ", t.width());
                var r, s, l = 0, c = 0;
                if (e.length > 0) {
                    var d = $(".js-cycling-btn");
                    e.css({
                        left: 0
                    }),
                    console.log("gallery startPos 22", 0, n),
                    d.on("click", (function() {
                        h($(this).data("action"), 1)
                    }
                    )),
                    setInterval((function() {
                        i || h("next", 1)
                    }
                    ), 2500),
                    e.on("touchstart", (function(t) {
                        i = !0,
                        t = t || window.event,
                        r = parseFloat(e.css("left")),
                        "touchstart" == t.type ? l = t.touches[0].clientX : (l = t.clientX,
                        document.onmouseup = m,
                        document.onmousemove = u)
                    }
                    )),
                    e.on("touchend", m),
                    e.on("touchmove", u)
                }
                function u(t) {
                    t = t || window.event,
                    i = !0,
                    "touchmove" == t.type ? (c = l - t.touches[0].clientX,
                    l = t.touches[0].clientX) : (c = l - t.clientX,
                    l = t.clientX),
                    e.css({
                        left: parseFloat(e.css("left")) - c + "px"
                    })
                }
                function m(t) {
                    s = parseFloat(e.css("left"));
                    var n = Math.round((s - r) / o);
                    n <= -1 ? h("next", Math.abs(n)) : n >= 1 ? h("next", n) : e.css({
                        left: r + "px"
                    }),
                    document.onmouseup = null,
                    document.onmousemove = null,
                    i = !1
                }
                function h(t, i) {
                    i || (i = 1);
                    var r = "prev" === t ? -i : i;
                    e.animate({
                        left: "+=" + (o - 27) * r
                    }, (function() {
                        !!(0 === (a += r) || a > n + 1) && (a = 0 === a ? n : 1,
                        e.css({
                            left: 0
                        }))
                    }
                    ))
                }
            }
            )),
            $((function() {
                var e = $(".trx-slider-x ul")
                  , t = e.find("li")
                  , n = e.data("count")
                  , a = 1
                  , o = -1 * (t.width() + 6);
                if (e.length > 0) {
                    var i = $(".js-cycling-btn");
                    e.css({
                        left: 0
                    }),
                    console.log("gallery startPos", o, 0, n),
                    i.on("click", (function() {
                        r($(this).data("action"), 1)
                    }
                    )),
                    setInterval((function() {
                        r("next", 1)
                    }
                    ), 2e3)
                }
                function r(t, i) {
                    i || (i = 1);
                    var r = "prev" === t ? -i : i;
                    console.log("delta" + r),
                    e.animate({
                        left: "+=" + (o - 27) * r
                    }, (function() {
                        !!(0 === (a += r) || a > n) && (a = 0 === a ? n : 1,
                        e.css({
                            left: (o - 30) * a
                        }))
                    }
                    ))
                }
            }
            )),
            $((function() {
                var e = $(".trx-slider-y ul")
                  , t = e.find("li")
                  , n = e.data("count")
                  , a = 1
                  , o = -1 * (t.height() + 31);
                if (e.length > 0) {
                    var i = $(".js-cycling-btn");
                    e.css({
                        top: 0
                    }),
                    console.log("widthdraw startPos", 0, t.height(), o),
                    i.on("click", (function() {
                        r($(this).data("action"), 5)
                    }
                    )),
                    setInterval((function() {
                        r("next", 1)
                    }
                    ), 1300)
                }
                function r(t, i) {
                    i || (i = 1);
                    var r = "prev" === t ? -i : i;
                    e.animate({
                        top: "+=" + o * r
                    }, (function() {
                        !!(0 === (a += r) || a > n) && (a = 0 === a ? n : 1,
                        e.css({
                            top: (o + 34) * (a + 1)
                        }))
                    }
                    ))
                }
            }
            )),
            $((function() {
                var e = $(".js-cycling-gallery-giga ul")
                  , t = e.find("li")
                  , n = e.data("count")
                  , a = 1
                  , o = $(window).width() < 600 ? -1 * (t.width() - 10) : -1 * (t.width() + 15);
                startPos = o * n,
                pauseAnimation = !1,
                console.log("gallery width", t.width());
                var i, r, s = 0, l = 0;
                if (e.length > 0) {
                    var c = $(".js-cycling-btn");
                    e.css({
                        left: startPos
                    }),
                    console.log("gallery startPos 22", startPos, n),
                    c.on("click", (function() {
                        m($(this).data("action"), 1)
                    }
                    )),
                    setInterval((function() {
                        pauseAnimation || m("next", 1)
                    }
                    ), 2e3),
                    e.on("touchstart", (function(t) {
                        pauseAnimation = !0,
                        (t = t || window.event).preventDefault(),
                        i = parseFloat(e.css("left")),
                        "touchstart" == t.type ? s = t.touches[0].clientX : (s = t.clientX,
                        document.onmouseup = u,
                        document.onmousemove = d)
                    }
                    )),
                    e.on("touchend", u),
                    e.on("touchmove", d)
                }
                function d(t) {
                    t = t || window.event,
                    pauseAnimation = !0,
                    "touchmove" == t.type ? (l = s - t.touches[0].clientX,
                    s = t.touches[0].clientX) : (l = s - t.clientX,
                    s = t.clientX),
                    e.css({
                        left: parseFloat(e.css("left")) - l + "px"
                    })
                }
                function u(t) {
                    r = parseFloat(e.css("left"));
                    var n = Math.round((r - i) / o);
                    n <= -1 ? m("next", Math.abs(n)) : n >= 1 ? m("next", n) : e.css({
                        left: i + "px"
                    }),
                    document.onmouseup = null,
                    document.onmousemove = null,
                    pauseAnimation = !1
                }
                function m(t, i) {
                    i || (i = 1);
                    var r = "prev" === t ? -i : i;
                    console.log("delta" + r),
                    e.animate({
                        left: "+=" + (o - 27) * r
                    }, (function() {
                        !!(0 === (a += r) || a > n) && (a = 0 === a ? n : 1,
                        e.css({
                            left: (o - 27) * (a + 1)
                        }))
                    }
                    ))
                }
            }
            )),
            $((function() {
                var e = $(".js-cycling-gallery-onix-last-WD ul")
                  , t = e.find("li")
                  , n = e.data("count")
                  , a = 1
                  , o = $(window).width() < 600 ? -1 * (t.width() - 10) : -1 * (t.width() + 15);
                startPos = o * n,
                pauseAnimation = !1,
                console.log("gallery width", t.width());
                var i, r, s = 0, l = 0;
                if (e.length > 0) {
                    var c = $(".js-cycling-btn");
                    e.css({
                        left: startPos
                    }),
                    console.log("gallery startPos 22", startPos, n),
                    c.on("click", (function() {
                        m($(this).data("action"), 1)
                    }
                    )),
                    setInterval((function() {
                        pauseAnimation || m("next", 1)
                    }
                    ), 2e3),
                    e.on("touchstart", (function(t) {
                        pauseAnimation = !0,
                        (t = t || window.event).preventDefault(),
                        i = parseFloat(e.css("left")),
                        "touchstart" == t.type ? s = t.touches[0].clientX : (s = t.clientX,
                        document.onmouseup = u,
                        document.onmousemove = d)
                    }
                    )),
                    e.on("touchend", u),
                    e.on("touchmove", d),
                    $('a[data-toggle="tab"]').on("shown.bs.tab", (function() {
                        pauseAnimation = !0,
                        e.stop(!0, !0),
                        a = 1,
                        e.css({
                            left: 0
                        }),
                        pauseAnimation = !1
                    }
                    ))
                }
                function d(t) {
                    t = t || window.event,
                    pauseAnimation = !0,
                    "touchmove" == t.type ? (l = s - t.touches[0].clientX,
                    s = t.touches[0].clientX) : (l = s - t.clientX,
                    s = t.clientX),
                    e.css({
                        left: parseFloat(e.css("left")) - l + "px"
                    })
                }
                function u(t) {
                    r = parseFloat(e.css("left"));
                    var n = Math.round((r - i) / o);
                    n <= -1 ? m("next", Math.abs(n)) : n >= 1 ? m("next", n) : e.css({
                        left: i + "px"
                    }),
                    document.onmouseup = null,
                    document.onmousemove = null,
                    pauseAnimation = !1
                }
                function m(t, i) {
                    i || (i = 1);
                    var r = "prev" === t ? -i : i;
                    console.log("delta" + r),
                    e.animate({
                        left: "+=" + (o - 27) * r
                    }, (function() {
                        !!(0 === (a += r) || a > n) && (a = 0 === a ? n : 1,
                        e.css({
                            left: (o - 27) * (a + 1)
                        }))
                    }
                    ))
                }
            }
            ))
        },
        2730: function() {
            $("#save-visible-code").change((function() {
                this.checked ? $("#verification-code").fadeIn() : $("#verification-code").fadeOut()
            }
            )),
            $(document).on("submit", "#enable2FA", (function(e) {
                e.preventDefault(),
                $("#" + this.id + " .btn-submit").prop("disabled", !0);
                var t = "#" + this.id;
                $(t + " .message").hide();
                var n = "";
                if ($(".pin-in-grp input").each((function() {
                    n += this.value
                }
                )),
                n.length < 6)
                    return $(t + " .btn-submit").prop("disabled", !1),
                    $(t + " .message").show(),
                    $(t + " .message").html("Pin is incomplete"),
                    !1;
                var a = $(this).attr("action");
                return json_post(a, {
                    fa2_token: n
                }).done((function(e) {
                    return console.log("enable fa2"),
                    sweetAlert(e.message, "success", "Success"),
                    $(t + " .btn-submit").removeAttr("disabled"),
                    setTimeout((function() {
                        window.location.reload()
                    }
                    ), 2e3),
                    !0
                }
                )).always((function(e, n, a) {
                    return $(".pincode").val(""),
                    $(t + " .btn-submit").removeAttr("disabled"),
                    !1
                }
                )),
                !1
            }
            )),
            $(document).on("submit", "#disable2FA", (function(e) {
                e.preventDefault();
                var t = "#" + this.id;
                $(t + " .btn-submit").prop("disabled", !0),
                $(t + " .message").hide();
                var n = "";
                if ($(".pin-in-grp input").each((function() {
                    n += this.value
                }
                )),
                n.length < 6)
                    return $(t + " .btn-submit").prop("disabled", !1),
                    $(t + " .message").show(),
                    $(t + " .message").html("Pin is incomplete"),
                    !1;
                var a = $(this).attr("action");
                return json_post(a, {
                    fa2_token: n
                }).done((function(e) {
                    return console.log("disable fa2"),
                    sweetAlert(e.message, "success", "Success"),
                    $(t + " .btn-submit").removeAttr("disabled"),
                    setTimeout((function() {
                        window.location.reload()
                    }
                    ), 2e3),
                    !0
                }
                )).always((function(e, n, a) {
                    return $(".pincode").val(""),
                    $(t + " .btn-submit").removeAttr("disabled"),
                    !1
                }
                )),
                !1
            }
            )),
            $(".desktop .copy-link").on("click", (function(e) {
                e.preventDefault();
                var t, n, a = $(this).attr("href");
                t = a,
                n = $("<input>"),
                $("body").append(n),
                n.val(t).select(),
                document.execCommand("copy"),
                n.remove(),
                alert("Link copied to clipboard: " + t)
            }
            ))
        },
        7090: function(e) {
            !function(t, n) {
                var a = function(e, t, n) {
                    "use strict";
                    var a, o;
                    if (function() {
                        var t, n = {
                            lazyClass: "lazyload",
                            loadedClass: "lazyloaded",
                            loadingClass: "lazyloading",
                            preloadClass: "lazypreload",
                            errorClass: "lazyerror",
                            autosizesClass: "lazyautosizes",
                            fastLoadedClass: "ls-is-cached",
                            iframeLoadMode: 0,
                            srcAttr: "data-src",
                            srcsetAttr: "data-srcset",
                            sizesAttr: "data-sizes",
                            minSize: 40,
                            customMedia: {},
                            init: !0,
                            expFactor: 1.5,
                            hFac: .8,
                            loadMode: 2,
                            loadHidden: !0,
                            ricTimeout: 0,
                            throttleDelay: 125
                        };
                        for (t in o = e.lazySizesConfig || e.lazysizesConfig || {},
                        n)
                            t in o || (o[t] = n[t])
                    }(),
                    !t || !t.getElementsByClassName)
                        return {
                            init: function() {},
                            cfg: o,
                            noSupport: !0
                        };
                    var i = t.documentElement
                      , r = e.HTMLPictureElement
                      , s = "addEventListener"
                      , l = "getAttribute"
                      , c = e[s].bind(e)
                      , d = e.setTimeout
                      , u = e.requestAnimationFrame || d
                      , m = e.requestIdleCallback
                      , h = /^picture$/i
                      , f = ["load", "error", "lazyincluded", "_lazyloaded"]
                      , p = {}
                      , g = Array.prototype.forEach
                      , b = function(e, t) {
                        return p[t] || (p[t] = new RegExp("(\\s|^)" + t + "(\\s|$)")),
                        p[t].test(e[l]("class") || "") && p[t]
                    }
                      , v = function(e, t) {
                        b(e, t) || e.setAttribute("class", (e[l]("class") || "").trim() + " " + t)
                    }
                      , $ = function(e, t) {
                        var n;
                        (n = b(e, t)) && e.setAttribute("class", (e[l]("class") || "").replace(n, " "))
                    }
                      , w = function(e, t, n) {
                        var a = n ? s : "removeEventListener";
                        n && w(e, t),
                        f.forEach((function(n) {
                            e[a](n, t)
                        }
                        ))
                    }
                      , k = function(e, n, o, i, r) {
                        var s = t.createEvent("Event");
                        return o || (o = {}),
                        o.instance = a,
                        s.initEvent(n, !i, !r),
                        s.detail = o,
                        e.dispatchEvent(s),
                        s
                    }
                      , y = function(t, n) {
                        var a;
                        !r && (a = e.picturefill || o.pf) ? (n && n.src && !t[l]("srcset") && t.setAttribute("srcset", n.src),
                        a({
                            reevaluate: !0,
                            elements: [t]
                        })) : n && n.src && (t.src = n.src)
                    }
                      , x = function(e, t) {
                        return (getComputedStyle(e, null) || {})[t]
                    }
                      , C = function(e, t, n) {
                        for (n = n || e.offsetWidth; n < o.minSize && t && !e._lazysizesWidth; )
                            n = t.offsetWidth,
                            t = t.parentNode;
                        return n
                    }
                      , _ = (ve = [],
                    $e = [],
                    we = ve,
                    ke = function() {
                        var e = we;
                        for (we = ve.length ? $e : ve,
                        ge = !0,
                        be = !1; e.length; )
                            e.shift()();
                        ge = !1
                    }
                    ,
                    ye = function(e, n) {
                        ge && !n ? e.apply(this, arguments) : (we.push(e),
                        be || (be = !0,
                        (t.hidden ? d : u)(ke)))
                    }
                    ,
                    ye._lsFlush = ke,
                    ye)
                      , A = function(e, t) {
                        return t ? function() {
                            _(e)
                        }
                        : function() {
                            var t = this
                              , n = arguments;
                            _((function() {
                                e.apply(t, n)
                            }
                            ))
                        }
                    }
                      , P = function(e) {
                        var t, a = 0, i = o.throttleDelay, r = o.ricTimeout, s = function() {
                            t = !1,
                            a = n.now(),
                            e()
                        }, l = m && r > 49 ? function() {
                            m(s, {
                                timeout: r
                            }),
                            r !== o.ricTimeout && (r = o.ricTimeout)
                        }
                        : A((function() {
                            d(s)
                        }
                        ), !0);
                        return function(e) {
                            var o;
                            (e = !0 === e) && (r = 33),
                            t || (t = !0,
                            (o = i - (n.now() - a)) < 0 && (o = 0),
                            e || o < 9 ? l() : d(l, o))
                        }
                    }
                      , q = function(e) {
                        var t, a, o = 99, i = function() {
                            t = null,
                            e()
                        }, r = function() {
                            var e = n.now() - a;
                            e < o ? d(r, o - e) : (m || i)(i)
                        };
                        return function() {
                            a = n.now(),
                            t || (t = d(r, o))
                        }
                    }
                      , N = (J = /^img$/i,
                    G = /^iframe$/i,
                    V = "onscroll"in e && !/(gle|ing)bot/.test(navigator.userAgent),
                    Y = 0,
                    Q = 0,
                    Z = 0,
                    ee = -1,
                    te = function(e) {
                        Z--,
                        (!e || Z < 0 || !e.target) && (Z = 0)
                    }
                    ,
                    ne = function(e) {
                        return null == K && (K = "hidden" == x(t.body, "visibility")),
                        K || !("hidden" == x(e.parentNode, "visibility") && "hidden" == x(e, "visibility"))
                    }
                    ,
                    ae = function(e, n) {
                        var a, o = e, r = ne(e);
                        for (O -= n,
                        U += n,
                        H -= n,
                        W += n; r && (o = o.offsetParent) && o != t.body && o != i; )
                            (r = (x(o, "opacity") || 1) > 0) && "visible" != x(o, "overflow") && (a = o.getBoundingClientRect(),
                            r = W > a.left && H < a.right && U > a.top - 1 && O < a.bottom + 1);
                        return r
                    }
                    ,
                    oe = function() {
                        var e, n, r, s, c, d, u, m, h, f, p, g, b = a.elements;
                        if ((z = o.loadMode) && Z < 8 && (e = b.length)) {
                            for (n = 0,
                            ee++; n < e; n++)
                                if (b[n] && !b[n]._lazyRace)
                                    if (!V || a.prematureUnveil && a.prematureUnveil(b[n]))
                                        me(b[n]);
                                    else if ((m = b[n][l]("data-expand")) && (d = 1 * m) || (d = Q),
                                    f || (f = !o.expand || o.expand < 1 ? i.clientHeight > 500 && i.clientWidth > 500 ? 500 : 370 : o.expand,
                                    a._defEx = f,
                                    p = f * o.expFactor,
                                    g = o.hFac,
                                    K = null,
                                    Q < p && Z < 1 && ee > 2 && z > 2 && !t.hidden ? (Q = p,
                                    ee = 0) : Q = z > 1 && ee > 1 && Z < 6 ? f : Y),
                                    h !== d && (D = innerWidth + d * g,
                                    X = innerHeight + d,
                                    u = -1 * d,
                                    h = d),
                                    r = b[n].getBoundingClientRect(),
                                    (U = r.bottom) >= u && (O = r.top) <= X && (W = r.right) >= u * g && (H = r.left) <= D && (U || W || H || O) && (o.loadHidden || ne(b[n])) && (I && Z < 3 && !m && (z < 3 || ee < 4) || ae(b[n], d))) {
                                        if (me(b[n]),
                                        c = !0,
                                        Z > 9)
                                            break
                                    } else
                                        !c && I && !s && Z < 4 && ee < 4 && z > 2 && (j[0] || o.preloadAfterLoad) && (j[0] || !m && (U || W || H || O || "auto" != b[n][l](o.sizesAttr))) && (s = j[0] || b[n]);
                            s && !c && me(s)
                        }
                    }
                    ,
                    ie = P(oe),
                    re = function(e) {
                        var t = e.target;
                        t._lazyCache ? delete t._lazyCache : (te(e),
                        v(t, o.loadedClass),
                        $(t, o.loadingClass),
                        w(t, le),
                        k(t, "lazyloaded"))
                    }
                    ,
                    se = A(re),
                    le = function(e) {
                        se({
                            target: e.target
                        })
                    }
                    ,
                    ce = function(e, t) {
                        var n = e.getAttribute("data-load-mode") || o.iframeLoadMode;
                        0 == n ? e.contentWindow.location.replace(t) : 1 == n && (e.src = t)
                    }
                    ,
                    de = function(e) {
                        var t, n = e[l](o.srcsetAttr);
                        (t = o.customMedia[e[l]("data-media") || e[l]("media")]) && e.setAttribute("media", t),
                        n && e.setAttribute("srcset", n)
                    }
                    ,
                    ue = A((function(e, t, n, a, i) {
                        var r, s, c, u, m, f;
                        (m = k(e, "lazybeforeunveil", t)).defaultPrevented || (a && (n ? v(e, o.autosizesClass) : e.setAttribute("sizes", a)),
                        s = e[l](o.srcsetAttr),
                        r = e[l](o.srcAttr),
                        i && (u = (c = e.parentNode) && h.test(c.nodeName || "")),
                        f = t.firesLoad || "src"in e && (s || r || u),
                        m = {
                            target: e
                        },
                        v(e, o.loadingClass),
                        f && (clearTimeout(B),
                        B = d(te, 2500),
                        w(e, le, !0)),
                        u && g.call(c.getElementsByTagName("source"), de),
                        s ? e.setAttribute("srcset", s) : r && !u && (G.test(e.nodeName) ? ce(e, r) : e.src = r),
                        i && (s || u) && y(e, {
                            src: r
                        })),
                        e._lazyRace && delete e._lazyRace,
                        $(e, o.lazyClass),
                        _((function() {
                            var t = e.complete && e.naturalWidth > 1;
                            f && !t || (t && v(e, o.fastLoadedClass),
                            re(m),
                            e._lazyCache = !0,
                            d((function() {
                                "_lazyCache"in e && delete e._lazyCache
                            }
                            ), 9)),
                            "lazy" == e.loading && Z--
                        }
                        ), !0)
                    }
                    )),
                    me = function(e) {
                        if (!e._lazyRace) {
                            var t, n = J.test(e.nodeName), a = n && (e[l](o.sizesAttr) || e[l]("sizes")), i = "auto" == a;
                            (!i && I || !n || !e[l]("src") && !e.srcset || e.complete || b(e, o.errorClass) || !b(e, o.lazyClass)) && (t = k(e, "lazyunveilread").detail,
                            i && F.updateElem(e, !0, e.offsetWidth),
                            e._lazyRace = !0,
                            Z++,
                            ue(e, t, i, a, n))
                        }
                    }
                    ,
                    he = q((function() {
                        o.loadMode = 3,
                        ie()
                    }
                    )),
                    fe = function() {
                        3 == o.loadMode && (o.loadMode = 2),
                        he()
                    }
                    ,
                    pe = function() {
                        I || (n.now() - E < 999 ? d(pe, 999) : (I = !0,
                        o.loadMode = 3,
                        ie(),
                        c("scroll", fe, !0)))
                    }
                    ,
                    {
                        _: function() {
                            E = n.now(),
                            a.elements = t.getElementsByClassName(o.lazyClass),
                            j = t.getElementsByClassName(o.lazyClass + " " + o.preloadClass),
                            c("scroll", ie, !0),
                            c("resize", ie, !0),
                            c("pageshow", (function(e) {
                                if (e.persisted) {
                                    var n = t.querySelectorAll("." + o.loadingClass);
                                    n.length && n.forEach && u((function() {
                                        n.forEach((function(e) {
                                            e.complete && me(e)
                                        }
                                        ))
                                    }
                                    ))
                                }
                            }
                            )),
                            e.MutationObserver ? new MutationObserver(ie).observe(i, {
                                childList: !0,
                                subtree: !0,
                                attributes: !0
                            }) : (i[s]("DOMNodeInserted", ie, !0),
                            i[s]("DOMAttrModified", ie, !0),
                            setInterval(ie, 999)),
                            c("hashchange", ie, !0),
                            ["focus", "mouseover", "click", "load", "transitionend", "animationend"].forEach((function(e) {
                                t[s](e, ie, !0)
                            }
                            )),
                            /d$|^c/.test(t.readyState) ? pe() : (c("load", pe),
                            t[s]("DOMContentLoaded", ie),
                            d(pe, 2e4)),
                            a.elements.length ? (oe(),
                            _._lsFlush()) : ie()
                        },
                        checkElems: ie,
                        unveil: me,
                        _aLSL: fe
                    })
                      , F = (T = A((function(e, t, n, a) {
                        var o, i, r;
                        if (e._lazysizesWidth = a,
                        a += "px",
                        e.setAttribute("sizes", a),
                        h.test(t.nodeName || ""))
                            for (i = 0,
                            r = (o = t.getElementsByTagName("source")).length; i < r; i++)
                                o[i].setAttribute("sizes", a);
                        n.detail.dataAttr || y(e, n.detail)
                    }
                    )),
                    L = function(e, t, n) {
                        var a, o = e.parentNode;
                        o && (n = C(e, o, n),
                        (a = k(e, "lazybeforesizes", {
                            width: n,
                            dataAttr: !!t
                        })).defaultPrevented || (n = a.detail.width) && n !== e._lazysizesWidth && T(e, o, a, n))
                    }
                    ,
                    S = q((function() {
                        var e, t = M.length;
                        if (t)
                            for (e = 0; e < t; e++)
                                L(M[e])
                    }
                    )),
                    {
                        _: function() {
                            M = t.getElementsByClassName(o.autosizesClass),
                            c("resize", S)
                        },
                        checkElems: S,
                        updateElem: L
                    })
                      , R = function() {
                        !R.i && t.getElementsByClassName && (R.i = !0,
                        F._(),
                        N._())
                    };
                    var M, T, L, S;
                    var j, I, B, z, E, D, X, O, H, W, U, K, J, G, V, Y, Q, Z, ee, te, ne, ae, oe, ie, re, se, le, ce, de, ue, me, he, fe, pe;
                    var ge, be, ve, $e, we, ke, ye;
                    return d((function() {
                        o.init && R()
                    }
                    )),
                    a = {
                        cfg: o,
                        autoSizer: F,
                        loader: N,
                        init: R,
                        uP: y,
                        aC: v,
                        rC: $,
                        hC: b,
                        fire: k,
                        gW: C,
                        rAF: _
                    }
                }(t, t.document, Date);
                t.lazySizes = a,
                e.exports && (e.exports = a)
            }("undefined" != typeof window ? window : {})
        }
    }
      , t = {};
    function n(a) {
        var o = t[a];
        if (void 0 !== o)
            return o.exports;
        var i = t[a] = {
            exports: {}
        };
        return e[a](i, i.exports, n),
        i.exports
    }
    n.n = function(e) {
        var t = e && e.__esModule ? function() {
            return e.default
        }
        : function() {
            return e
        }
        ;
        return n.d(t, {
            a: t
        }),
        t
    }
    ,
    n.d = function(e, t) {
        for (var a in t)
            n.o(t, a) && !n.o(e, a) && Object.defineProperty(e, a, {
                enumerable: !0,
                get: t[a]
            })
    }
    ,
    n.o = function(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }
    ,
    function() {
        "use strict";
        n(7090);
        lazySizes.cfg.lazyClass = "lazy",
        lazySizes.cfg.loadMode = 1,
        n(9946),
        n(7438),
        function(e) {
            if (e(document).on("lazyloaded", (function(t) {
                e(t.target).next().hide();
                var n = t.target;
                n.complete && void 0 !== n.naturalWidth && 0 != n.naturalWidth || e(n).parents(".game-box").remove()
            }
            )),
            n(4853),
            e("#carousel-fixed-height").on("slide.bs.carousel", (function(t) {
                var n;
                (n = e(t.relatedTarget).find("img[data-src]")) && n.length > 0 && (n.attr("src", n.data("src")),
                n.removeAttr("data-src"))
            }
            )),
            n(9117),
            n(5923),
            n(8855),
            n(9431),
            n(4401),
            n(2730),
            e(".footer-body").length) {
                var t = e(".footer-body").offset().top + e(".footer-body").height()
                  , a = e(document).height();
                e("#collapsible-footer").click((function(n) {
                    return e(".footer-title .i-collapse").toggleClass("rotate"),
                    n.preventDefault(),
                    e(".footer-body").slideToggle(),
                    e("html, body").animate({
                        scrollTop: t + a
                    }, 2e3),
                    !1
                }
                ))
            }
            n(928),
            n(4402);
            var o = !1;
            try {
                o = sessionStorage.getItem("isCloseAPKDownBar")
            } catch (e) {}
            if ("true" !== o && e("#apk-down-bar").show(),
            e("#btn-close--apk").click((function() {
                e("#apk-down-bar").fadeToggle();
                try {
                    sessionStorage.setItem("isCloseAPKDownBar", "true")
                } catch (e) {}
            }
            )),
            document.getElementById("collapsible-footer") && (window.onscroll = function() {
                var t;
                t = e("#collapsible-footer").offset().top + e(window).height(),
                document.body.scrollTop > t || document.documentElement.scrollTop > t ? e("#btn-wrap--goToTop").show() : e("#btn-wrap--goToTop").hide()
            }
            ),
            window.topFunction = function() {
                document.body.scrollTop = e("#collapsible-footer").offset().top - 150,
                document.documentElement.scrollTop = e("#collapsible-footer").offset().top - 150;
                var t = e(".footer-body").offset().top + e(".footer-body").height()
                  , n = e(document).height();
                e(".footer-body .i-collapse").toggleClass("rotate"),
                e(".footer-body").slideToggle(),
                e("html, body").animate({
                    scrollTop: t + n
                }, 2e3)
            }
            ,
            e("#home_float-menu1").length > 0 && (e(document).click((function(t) {
                !e(t.target).closest("#home_float-menu1").length && e("#home_float-menu1").hasClass("visible") && e("#home_float-menu1").removeClass("visible")
            }
            )),
            e("#home_float-menu1").click((function() {
                e("#home_float-menu1").addClass("visible")
            }
            ))),
            window.isAuth)
                check_notification_status()
        }(jQuery),
        n(6956)
    }()
}();
