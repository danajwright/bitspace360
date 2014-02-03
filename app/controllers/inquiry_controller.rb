class InquiryController < ApplicationController

  def index

  end

  def new
    @inquiry = Inquiry.new
  end

  def create
    Inquiry.create(:name => params[:name], :email => params[:email], :phone => params[:phone],
    :mining => params[:mining], :co_working => params[:co_working],
    :project_support => params[:project_support])
    flash[:notice] = "Your form was submitted successfully!  We will contact you within 24 hours."
    redirect_to pages_index_path
  end

end
