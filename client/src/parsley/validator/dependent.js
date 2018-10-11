/* Parsley Conditional Validator
===================================================================================================================== */

import $ from 'jquery'
import Parsley from 'parsleyjs'

// Define Conditioanl Validator:
// Parsley.addValidator('dependent', {
//   validateString: function (value, requirement) {
//     console.log('dependent')
//     console.log(value)
//     console.log(requirement)
//     //
//     const field = $(`[name=${requirement}]`).parsley()
//     console.log(field)
//     field.validate({ group: 'passwords' })

//     if (requirementVal === '' && value === '') {
//       console.log(true)
//       field.destroy()
//       return true
//     }

//     if (requirementVal !== '' && value !== '') {
//       console.log(true)
//       field.destroy()
//       return true
//     }

//     field.reset()
//     return true
//   },
//   priority: 33
// })

// Parsley.on('field:validate', function () {
//   // This global callback will be called for any field that fails validation.
//   console.log('Validation for: ', this.$element)
//   const element = this.$element[0]
//   console.log(element)
//   console.log(element.id)

//   if (element.id == 'AccountForm_AccountForm_OldPassword') {
//     const pw2 = $('#AccountForm_AccountForm_NewPassword2').parsley()
//     const pw1 = $('#AccountForm_AccountForm_NewPassword1').parsley()

//     if (element.value === '') {
//       console.log('destroy')

//       pw1.destroy()
//       pw2.destroy()
//     } else {
//       console.log('reset')

//       pw1.reset()
//       pw2.reset()
//     }
//   }
// })

Parsley.on('field:validate', function () {
  const element = this.$element[0]
  const pw2 = $('#AccountForm_AccountForm_NewPassword2')
  const pw1 = $('#AccountForm_AccountForm_NewPassword1')

  if (element.id == 'AccountForm_AccountForm_OldPassword') {
    if (element.value === '') {
      pw1.attr('data-parsley-required', false)
      pw2.attr('data-parsley-required', false)
    } else {
      console.log('required')

      pw1.attr('data-parsley-required', true)
      pw2.attr('data-parsley-required', true)
    }

    pw1.parsley().reset()
    pw2.parsley().reset()
  }

  if (element.id == 'AccountForm_AccountForm_NewPassword1') {
    pw2.parsley().validate()
  }
})
