class InquiryMailer < ActionMailer::Base
  default from: "no-reply@bitspace360.com"

  def inquiry_email(inquiry)
      @inquiry = inquiry
      @url  = 'http://localhost:3000'
      mail(to: 'danajwright@gmail.com', subject: 'Bitspace360 Inquiry')
  end

end


