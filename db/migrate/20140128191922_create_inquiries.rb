class CreateInquiries < ActiveRecord::Migration
  def change
    create_table :inquiries do |t|
      t.string :name
      t.string :email
      t.string :phone
      t.boolean :mining
      t.boolean :co_working
      t.boolean :project_support
      t.string :details
      t.timestamps
    end
  end
end
