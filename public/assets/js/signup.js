
  $(document).ready(function() {
    var e, t, r, a;

    var s = function() {
      return a.getScore() > 50;
    };

    function isURL(str) {
      try {
        new URL(str);
        return true;
      } catch (e) {
        return false;
      }
    }

    e = $("#kt_sign_up_form");
    t = $("#kt_sign_up_submit");
    a = KTPasswordMeter.getInstance(e.find('[data-kt-password-meter="true"]'));

    if (!isURL(t.closest("form").attr("action"))) {
      r = FormValidation.formValidation(e, {
        fields: {
          "first-name": {
            validators: {
              notEmpty: {
                message: "First Name is required"
              }
            }
          },
          "last-name": {
            validators: {
              notEmpty: {
                message: "Last Name is required"
              }
            }
          },
          email: {
            validators: {
              regexp: {
                regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                message: "The value is not a valid email address"
              },
              notEmpty: {
                message: "Email address is required"
              }
            }
          },
          password: {
            validators: {
              notEmpty: {
                message: "The password is required"
              },
              callback: {
                message: "Please enter a valid password",
                callback: function(e) {
                  if (e.value.length > 0) return s();
                }
              }
            }
          },
          "confirm-password": {
            validators: {
              notEmpty: {
                message: "The password confirmation is required"
              },
              identical: {
                compare: function() {
                  return e.find('[name="password"]').val();
                },
                message: "The password and its confirm are not the same"
              }
            }
          },
          toc: {
            validators: {
              notEmpty: {
                message: "You must accept the terms and conditions"
              }
            }
          }
        },
        plugins: {
          trigger: new FormValidation.plugins.Trigger({
            event: {
              password: false
            }
          }),
          bootstrap: new FormValidation.plugins.Bootstrap5({
            rowSelector: ".fv-row",
            eleInvalidClass: "",
            eleValidClass: ""
          })
        }
      });

      t.on("click", function(s) {
        s.preventDefault();
        r.revalidateField("password");
        r.validate().then(function(r) {
          if (r === "Valid") {
            t.attr("data-kt-indicator", "on");
            t.prop("disabled", true);
            setTimeout(function() {
              t.removeAttr("data-kt-indicator");
              t.prop("disabled", false);

              Swal.fire({
                text: "You have successfully reset your password!",
                icon: "success",
                buttonsStyling: false,
                confirmButtonText: "Ok, got it!",
                customClass: {
                  confirmButton: "btn btn-primary"
                }
              }).then(function(t) {
                if (t.isConfirmed) {
                  e[0].reset();
                  a.reset();
                  var redirectUrl = e.attr("data-kt-redirect-url");
                  if (redirectUrl) {
                    location.href = redirectUrl;
                  }
                }
              });
            }, 1500);
          } else {
            Swal.fire({
              text: "Sorry, looks like there are some errors detected, please try again.",
              icon: "error",
              buttonsStyling: false,
              confirmButtonText: "Ok, got it!",
              customClass: {
                confirmButton: "btn btn-primary"
              }
            });
          }
        });
      });

      e.find('input[name="password"]').on("input", function() {
        if (this.value.length > 0) {
          r.updateFieldStatus("password", "NotValidated");
        }
      });
    } else {
      r = FormValidation.formValidation(e, {
        fields: {
          name: {
            validators: {
              notEmpty: {
                message: "Name is required"
              }
            }
          },
          email: {
            validators: {
              regexp: {
                regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                message: "The value is not a valid email address"
              },
              notEmpty: {
                message: "Email address is required"
              }
            }
          },
          password: {
            validators: {
              notEmpty: {
                message: "The password is required"
              },
              callback: {
                message: "Please enter a valid password",
                callback: function(e) {
                  if (e.value.length > 0) return s();
                }
              }
            }
          },
          password_confirmation: {
            validators: {
              notEmpty: {
                message: "The password confirmation is required"
              },
              identical: {
                compare: function() {
                  return e.find('[name="password"]').val();
                },
                message: "The password and its confirm are not the same"
              }
            }
          },
          toc: {
            validators: {
              notEmpty: {
                message: "You must accept the terms and conditions"
              }
            }
          }
        },
        plugins: {
          trigger: new FormValidation.plugins.Trigger({
            event: {
              password: false
            }
          }),
          bootstrap: new FormValidation.plugins.Bootstrap5({
            rowSelector: ".fv-row",
            eleInvalidClass: "",
            eleValidClass: ""
          })
        }
      });

      t.on("click", function(a) {
        a.preventDefault();
        r.revalidateField("password");
        r.validate().then(function(r) {
          if (r === "Valid") {
            t.attr("data-kt-indicator", "on");
            t.prop("disabled", true);
            axios.post(t.closest("form").attr("action"), new FormData(e))
              .then(function(response) {
                if (response) {
                  e[0].reset();
                  var redirectUrl = e.attr("data-kt-redirect-url");
                  if (redirectUrl) {
                    location.href = redirectUrl;
                  }
                } else {
                  Swal.fire({
                    text: "Sorry, looks like there are some errors detected, please try again.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                      confirmButton: "btn btn-primary"
                    }
                  });
                }
              })
              .catch(function(error) {
                Swal.fire({
                  text: "Sorry, looks like there are some errors detected, please try again.",
                  icon: "error",
                  buttonsStyling: false,
                  confirmButtonText: "Ok, got it!",
                  customClass: {
                    confirmButton: "btn btn-primary"
                  }
                });
              })
              .then(function() {
                t.removeAttr("data-kt-indicator");
                t.prop("disabled", false);
              });
          } else {
            Swal.fire({
              text: "Sorry, looks like there are some errors detected, please try again.",
              icon: "error",
              buttonsStyling: false,
              confirmButtonText: "Ok, got it!",
              customClass: {
                confirmButton: "btn btn-primary"
              }
            });
          }
        });
      });

      e.find('input[name="password"]').on("input", function() {
        if (this.value.length > 0) {
          r.updateFieldStatus("password", "NotValidated");
        }
      });
    }
  });

